<?php
class Register extends MysqliConnect{
    public function test(){
        $this->insert('users', 'firstname', "'walaa'");
        $this->execute();
    }
}