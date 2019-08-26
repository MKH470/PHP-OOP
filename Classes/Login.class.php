<?php

class Login extends MysqliConnect{
    private $email,$pass,$md5;
    public function setInput($email,$pass){
        $this->email=$this->esc($this->html($email));
        $this->pass=$this->esc($this->html($pass));
        $this->md5= md5(sha1($this->pass));
    }
    public function checkInput(){
        if(empty($this->email ) ){
            Messages::setMsg("Please! ", " Enter your  email","danger");
            echo Messages::getMsg();
    }
        elseif(empty($this->pass)){
            Messages::setMsg("Please! ", " Enter your passworde","danger");
            echo Messages::getMsg();
        }
        elseif(!$this->checkUser()){
            Messages::setMsg("Sorry! ", " But the data entered is incorrect","danger");
            echo Messages::getMsg();
        }
        else{
            return TRUE;
        }
        return FALSE;
    }
    private function checkUser(){
        $this->query('users', 'user_id', "WHERE `email`='$this->email' AND `pass`='$this->md5'");
        $this->execute();
        if($this->rowCount()>0){
            return TRUE;  
        }
        else{
            return FALSE;
        }
        
    }
    public function makeUserInloged(){
        if($this->checkUser()){
            $this->query('`users`', '*',"WHERE `email`='$this->email' AND `pass` ='$this->md5'");
            $this->execute();
            $user=$this->fetch();
            $admin=($user['isAdmin']== 1? TRUE : FALSE);
            $_SESSION['is_logged']=TRUE;
            $_SESSION['user']=[
                                'id'=> $user['user_id'],
                                'fname'=> $user['firstname'],
                                'lname'=> $user['lastname'],
                                'email'=> $user['email'],
                                'isAdmin'=>$admin,
                                 ];
                                 return TRUE;
        }else{
        return FALSE;}
    }

    public function DesplayError(){
        if($this->checkInput()){
           if($this->makeUserInloged()){
               header("location: index.php");
           }
            else{
                Messages::setMsg("Sorry!! ", " an unexpected error occurred while loading data","danger");
                    echo Messages::getMsg();}

      }
}
}