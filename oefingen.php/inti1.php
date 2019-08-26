

<?php
require_once "Core/config.php";
require_once "App/Interfaces/InterfaceDatabase.php";
spl_autoload_register(function($name){
    require_once "Classes/{$name}.class.php";
});


$test=new Register();
$test->test();


//$db=new MysqliConnect();
//$db->insert('users','firstname,lastname,email',"'Ahmad','Ahmaddd','gghff@gmail.com'");
//$db->update('users', "firstname='Muhanad'",1, 'user_id');
//$db->query('users','user_id',"WHERE firstname= 'Ahmad'");
//echo $db->rowCount();
//$db->delete('users', 3, 'user_id');
//$db->execute();