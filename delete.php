<?php ob_start();
include 'header.php';
Session::checkLogin();?>

<body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          
        <div class="logo">
         <a href="index.php" class="logo"><img src="img/logo.png" alt="HP" /></a> 
         </div>   
           
     
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">View All Email</a></li>
            
          </ul>
      
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="top-header col-sm-offset-3 col-md-offset-2">
    
    <a href="#" class="pull-right"> Logout &nbsp; &nbsp; </a> 
    </div>
          

          <div class="row">
             <div class="box">
             <?php 
                 
             if(isset($_POST['delete_template'])){
              $d_id = $_POST['delete_template'];

              $template_html = DB::getInstance()->get('template_uploads',array( 'id','=',$d_id));
              $html = $template_html->first();
              $html_url = Config::getWebServerRoot()."/uploads/".$html->template_url;
             
              $delete = DB::getInstance()->delete('template_uploads',array('id','=',$d_id ));
               //var_dump($html_url);
                if($delete) {
                    unlink($html_url);
                    echo "<h3 class='alert alert-succes'>HTML template has been deleted!!</h3>";
                }else{
                    echo "<h3 class='alert alert-succes'>Something Went Wrong. Please try agian.</h3>";
                } 
                
            }
                ?>
                
      </div>
          </div>

          
      </div>
    </div>
<?php include 'footer.php';?>