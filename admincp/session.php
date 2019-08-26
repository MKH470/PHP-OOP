<?php
require_once __DIR__.'/../App/inti.php';
if(isset($_SESSION['is_logged']) and $_SESSION['is_logged'] ==true and $_SESSION['user']['isAdmin']==true){
    
}
else{
    header('location:../index.php');
}