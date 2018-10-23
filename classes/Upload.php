<?php 
class upload{
    public $src = "./uploads/";
    public $tmp;
    public $filename;
    public $typefl;
    public $uploadfile;
    public $type = array( "html", "htm", "php");

    function __construct(){

        $uniquesavename=time().uniqid(rand());
        $this->filename = pathinfo($_FILES["file"]["name"], PATHINFO_FILENAME).$uniquesavename.".".pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        // if( file_exists($this -> filename) ) {
        //     // change another filename to overwrite $path1
        //     $this -> filename = $this -> filename ."_1";
        // }
        $this->tmp = $_FILES["file"]["tmp_name"];
        $this->uploadfile = $this -> src . basename($this -> filename);
    }
    public function sizeck(){
        if($_FILES["file"]["size"] > 50000000){
            echo "Max file size";
            return true;
        }
    }
    public function extens(){

        //$this->typefl = pathinfo($this->tmp, PATHINFO_EXTENSION);
        $this->typefl = pathinfo($this->filename, PATHINFO_EXTENSION);

        if(!in_array($this->typefl, $this->type)){
            echo "Wrong extension!!!";
            return false;
        }
        else{
            return true;
        }
    }


    public function uploadfile(){
        
        if(move_uploaded_file($this -> tmp, $this -> uploadfile)){
            return true;
        }
    }

    public function filename(){
        return $this -> filename;
    }


}