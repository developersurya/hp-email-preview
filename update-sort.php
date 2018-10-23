<?php include 'header.php';
//$logout = new Session();
//Session::unsetSession();

$sort = $_POST['sortData'];
foreach($sort as $_sort=>$value){
    //debugger($_sort);
    $sort_list = array(
        'user'=> $_sort
    );
    echo $_sort;
    //echo $value['order'];
    debugger( $sort_list);
    $insert_data = DB::getInstance()->update('template_uploads',$value['order'],$sort_list);
    //die();
    
}
//die();
if($insert_data) {
echo "<h3 class='alert alert-succes'>uploaded!!</h3>";
}else{
echo "<h3 class='alert alert-succes'>Something Went Wrong. Please try agian.</h3>";
} 
?>
<?php include 'footer.php';?>