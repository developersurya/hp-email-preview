asdfdasf<?php 
ob_start();
include 'header.php';
Session::checkLogin();
?>

<body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          
        <div class="logo">
         <a href="index.php" class="logo"><img src="img/logo.png" alt="HP" /></a> 
         </div>   

       <?php include 'template-list.php';?>

		    <ul class="nav nav-sidebar upload">
            <li class="active"><a href="upload.php" class="btn">Upload New template</a></li>                     
        </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="top-header col-sm-offset-3 col-md-offset-2">
            <ul class="switch">
            <li class="mobile"><a href="#"> <img src="img/mobile.png" alt="" /> </a>		 </li>
            <li class="tablet"><a href="#"> <img src="img/tablet.png" alt="" /> </a>		 </li>
            <li class="desktop active"><a href="#"> <img src="img/desktop.png" alt="" /> </a>		 </li>
            </ul>
		    <a href="logout.php" class="pull-right"> Logout &nbsp; &nbsp; </a> 
    </div>
    
    <div class="row">
      <div class="viewPort">
        <div class="text-center">
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <h1>Welcome</h1>
            <h3>Choose template to see the preview.</h3>
          </div>
        </div>
      </div>
      </div>
    </div>

<?php include 'footer.php';?>
