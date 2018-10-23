<?php
class Config{

    public const APP_NAME = 'hp-email-preview';
    public const APP_URL = 'http://localhost/projects/';

    static public  function get($path){
        if($path){
            $config = $GLOBALS['config'];
            $path = explode('/',$path);
            //print_r($path);
            foreach($path as $bit){
                if(isset($config[$bit])){
                    $config = $config[$bit];
                }
            }
            return $config;
        }
        return false;
    }

    static public function getHostName(){
        return  $_SERVER['SERVER_NAME'];
    }

    static public function getWebServerRoot(){
        return  $_SERVER['DOCUMENT_ROOT'];
    }

    static public function getUrl(){
        return  $_SERVER['REQUEST_URI'];
    }

    static public function getUrlBase(){
        return  'http://'.self::getHostName().self::getUrl() ;
    }

    static public function site_url(){
        return self::APP_URL.self::APP_NAME;
    }

    
}

//$new = new Config('mysql/host');