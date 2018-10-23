<?php ob_start();
 include 'header.php';?>
<body>
<?php
$session = isset($_SESSION['id']) ? Session::get('id') : NULL; 
if($session){
    @header('location: ./');
    exit;
}

if(isset($_POST) && !empty($_POST)){
 $username = $_POST['username'];
 $password = $_POST['password'];
 if($username){
    
     $user = new User();
     debugger($username);
     $login = $user->login($username,$password);
     debugger($login);
     if($login){
        Session::put('success','Welcome '.$username);
        @header('location: ./');
        exit;
    }else{?>
        <h3  style="text-align: center;">Sorry,Login failed.<br/><p>Username or password error.</p></h3>
     <?php }
 }
}
?>
     
<div class="container-fluid">
     <div class="box">  
            <div class="  text-center">
                <a href="#" class="logo"><img src="img/logo.png" alt="HP" /></a> 
            </div>   
            <div class="login-head"> Welcome </div>
            <form class="myform" action="" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" class="form-control"  placeholder="Name" id="username" name="username">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control"  placeholder="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary" value="Login">view project</button>
               
            </form>
    </div>  
</div>

<?php include 'footer.php';?>