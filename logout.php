<?php include 'header.php';
$logout = new Session();
Session::unsetSession();
?>
<div class="container-fluid">

     <div class="box">  
            <div class="  text-center">
                <a href="#" class="logo"><img src="img/logo.png" alt="HP" /></a> 
            </div>   
            <div class="login-head"> You have been logged out. </div>
            <br/>
            <a href="login.php" >Login again?</a>

    </div>  
</div>
<?php include 'footer.php';?>