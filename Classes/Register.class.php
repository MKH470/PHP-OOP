<?php
class Register extends MysqliConnect{
    protected $firstname,$lastname,$email,$pass,$con_pass;
    public function setInput($firstname,$lastname,$email,$pass,$con_pass){
        $this->firstname  =$this->esc($this->html($firstname));
        $this->lastname   =$this->esc($this->html($lastname));
        $this->email      =$this->esc($this->html($email));
        $this->pass       = $this->esc($this->html($pass));
        $this->con_pass   =$this->esc($this->html($con_pass));
    }
    public function checkInput(){
        if(empty($this->firstname ) ){
            Messages::setMsg("Please! ", " Enter your first name","danger");
            echo Messages::getMsg();
        }
        elseif(empty($this->lastname)){
            Messages::setMsg("Please! ", " Enter your lastnamet name","danger");
            echo Messages::getMsg();
        }
       elseif(empty($this->email) ){
            Messages::setMsg("Please! ", " Enter your email","danger");
            echo Messages::getMsg();
        }
       elseif(!$this->checkEmail()){
            Messages::setMsg("Sorry! ", " but this email already exists","danger");
            echo Messages::getMsg();
        }
       elseif(empty($this->pass)){
            Messages::setMsg("Please! ", " Enter your password","danger");
            echo Messages::getMsg();
        }
        elseif($this->pass != $this->con_pass ){
            Messages::setMsg("Sorry! ", " Passwords do not match","danger");
            echo Messages::getMsg();
        }
        else{
            return TRUE;
        }
        return FALSE;
    }
    public function DesplayError(){
        if($this->checkInput()){
            if($this->InsertNewMember()){
          
           header("location:index.php");
          
        }
        else{
        Messages::setMsg("Sorry!! ", " an unexpected error occurred while loading data","danger");
            echo Messages::getMsg();}
    }
    }
    private function checkEmail(){
        $this->query('users','user_id',"WHERE email = '$this->email'");
        $this->execute();
        if($this->rowCount()== 0){
            return TRUE;
            }
            else{
                return FALSE;
            }
     }
    private function InsertNewMember(){
        $this->pass= md5(sha1($this->pass));
        $this->insert('users','firstname,lastname,email,pass',"'$this->firstname','$this->lastname','$this->email','$this->pass'");
        if($this->execute()){
             $_SESSION['is_inloged']=TRUE;
             $_SESSION['user']=[
                                'fname'=> $this->firstname,
                                'lname'=> $this->lastname,
                                'email'=> $this->email,
                                'isAdmin'=>FALSE,
                                 ];
                                 return TRUE;
        }
        
        else{
            return FALSE;
        }
    }

}