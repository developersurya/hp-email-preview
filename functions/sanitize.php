<?php
function escape($string){
    return htmlentities($string, ENT_QUOTES, 'UTF-8');
}

function debugger($data, $is_die = false){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    if($is_die){
        exit;
    }
}