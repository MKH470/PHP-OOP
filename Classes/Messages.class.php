<?php

class Messages{
public static $message;
public static function setMsg($tittle,$msg,$type){
    self::$message='<div class="alert alert-'.$type.' alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>'.$tittle.'</strong>'.$msg.'
</div>';
    
}
public static function getMsg(){
    return self::$message;
}
}

