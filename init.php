<?php 
include "header.php";
$GLOBALS['config'] = array(
    'mysql' => array(
        'host'     => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'db'       => 'plog'
    )
);
spl_autoload_register(function($class){
    require_once 'classes/'.$class.'.php';
});