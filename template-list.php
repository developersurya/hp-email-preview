<?php
require_once 'core/init.php';

//get lists of template
//$template_list = DB::getInstance()->query('SELECT * FROM template_uploads');
$template_list = DB::getInstance()->get('template_uploads',array( 'id','>','0'));
$url = Config::site_url();

if($template_list->count()){?>
    <input type="text" id="search-keyword" onkeyup="searchText()" placeholder="Search for names..">
    <!-- add data-url to pass url in js-->
    <ul class="nav nav-sidebar" id="template-list" data-url="<?php echo $url;?>"> 
        <?php
        //var_dump($template_list->results());
        $count = 0;
        $id = url_data('tid');
        //active class
        //data-id has been added to pass id while sorting
        foreach($template_list->results() as $list){?>
                <li class="<?php 
                if($id == $list->id){ 
                    echo $active = 'active';
                }elseif($count == 0 && $id == ""){
                    echo $active = 'active';
                }else{
                    echo $active = "";
                }?>" data-id="<?php echo $list->id;?>">
                    <a href="<?php echo $url;?>/template-view.php?tid=<?php echo $list->id;?>"><?php echo $list->template_name;?></a></li>
                <?php 
                $count++;
        }?>
            
    </ul>     
    <?php
}
?>

<script>
    function searchText() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('search-keyword');
    filter = input.value.toUpperCase();
    ul = document.getElementById("template-list");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>