<?php
ob_start();
session_start();
require_once __DIR__."/../Core/config.php";
require_once __DIR__."/../App/Interfaces/InterfaceDatabase.php";
spl_autoload_register(function($name){
    require_once __DIR__."/../Classes/{$name}.class.php";
});
if(isset($_GET['logout']) and $_GET['logout']== true){
    session_unset();
    session_destroy();
    header('location: index.php');
}
