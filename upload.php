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
             //var_dump($_POST);
             
             if(isset($_POST)){
                if(isset($_FILES['file'])){
                    $fileupload = new upload();

                    if(!$fileupload->sizeck()){

                        if($fileupload->extens()){
                            if($fileupload -> uploadfile()){

                                //insert data in db
                                //check the file name in database
                                if( $fileupload ->filename()){

                                    $insert_data = DB::getInstance()->insert('template_uploads',array(
                                            'template_name'=>$_POST['template_name'],
                                            'template_url'=> $fileupload ->filename(),
                                        ));
                                    if($insert_data) {
                                        echo "<h3 class='alert alert-succes'>HTML template has been uploaded!!</h3>";
                                    }else{
                                        echo "<h3 class='alert alert-succes'>Something Went Wrong. Please try agian.</h3>";
                                    } 
                                }
                                
                            }
                        }
                    }   
                }
            }
       
                ?>
                 <form  enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label for="Template Name">Template Name</label>
                            <input type="text" class="form-control"  placeholder="Template Name" name="template_name" required="yes">
                        </div>
                        <div class="form-group">
                            <label for="Upload your Html">Choose file</label>
                            <input type="file" class="form-control"  placeholder="file.html" name="file" required="yes" >
                        </div>
                         <input type="submit" class="btn btn-primary" value="Upload" >
                    </form>
			</div>
          </div>

          
      </div>
    </div>
<?php include 'footer.php';?>