<?php 
function url_data($parameter=null){
    if(!$parameter){
        return false;
    }
    $url = $_SERVER['QUERY_STRING'];
    $template_id = explode($parameter.'=', $url);
    return $template_id[1];
}