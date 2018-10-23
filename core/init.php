<?php 
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
session_start();

$GLOBALS['config'] = array(
    'mysql' =>array(
        'host'=> 'localhost',
        'username'=> 'root',
        'password'=> 'root',
        'db'=> 'customdb',
    ),
    'remember' =>array(
        'cookie_name'=> 'hash',
        'cookie_expire'=> '604800',
    ),
    'session' =>array(
        'session_name'=> 'user',
    ),
);


spl_autoload_register(function($class){
    require_once 'classes/'.$class.'.php';
});

require_once 'classes/Config.php';
require_once 'classes/DB.php';
require_once 'classes/User.php';
require_once 'classes/Session.php';
require_once 'classes/Upload.php';


require_once 'functions/sanitize.php';
require_once 'functions/url_data.php';

// if(Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('sessions/session_name'))) {
//     $hash = Cookie::get(Config::get('remember/cookie_name'));
//     $hashCheck = DB::getInstance()->get('users_session', array('hash', '=', $hash));

//     if($hashCheck->count()) {
//         $user = new User($hashCheck->first()->user_id);
//         $user->login();
//     }
// }