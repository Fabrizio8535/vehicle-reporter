<?php
session_start();

$GLOBALS['siteConfig'] = array(
    
    'mysql' => array(
        'host'=>'kunet',
        'dbname'=>'db_k1723548',
        'username'=>'k1723548',
        'password'=>'database'
    ),
    'session'=> array(
        'session_name'=> 'user'
    )
);
spl_autoload_register(function($className)
{
    require_once('../model/'.$className.'.php');
});
require_once('sanitizeStrings.php');

