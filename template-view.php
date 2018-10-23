<?php ob_start();
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

            <li class="active"><a href="upload.php" class="btn upload-btn">Upload New template</a></li>
            
          </ul>
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="top-header col-sm-offset-3 col-md-offset-2">
            <ul class="switch">
            <li class="mobile"><a href="#"> <img src="img/mobile.png" alt="" /> </a>     </li>
            <li class="tablet"><a href="#"> <img src="img/tablet.png" alt="" /> </a>     </li>
            <li class="desktop active"><a href="#"> <img src="img/desktop.png" alt="" /> </a>    </li>
            </ul>
          
        <a href="logout.php" class="pull-right"> Logout &nbsp; &nbsp; </a> 
    </div>
          

          <div class="row">
              <div class="text-center">
              <?php 
                  $id = url_data('tid');
                  //echo $id;
                  $url = Config::site_url();
                  $template_html = DB::getInstance()->get('template_uploads',array( 'id','=',$id));
                  $html = $template_html->first();?>
                 <h3><strong><?php echo $html->template_name;?></strong>
                 
                  <form action="delete.php" method="post" style="float:right;">
                      <input type="text" style="display:none;"  name="delete_template" value="<?php echo $id;?>">
                      <input type="submit" class="btn btn-primary btn-danger" value="Delete Template" >
                  </form>
                   </h3>
                  </div>
            <div class="viewPort">
                  <?php
                $html_url = $url."/uploads/".$html->template_url;
                if($html && $html_url){?>
                    <iframe src="<?php echo $html_url;?>" height="100%" width="100%"></iframe>
                <?php }else{?>
                   <h3>No html file available.</h3>
                <?php }?>
      </div>
          </div>

          
      </div>
    </div>

<?php include 'footer.php';?>
