<?php

interface DatabaseConnect{
    public function query($table,$colum,$other);
    public function execute();
    public function fetch();
    public function rowCount();
    public function lastId();
    public function update($table,$data,$id,$colum,$other);
    public function delete($table,$colum,$id,$other);
    public function insert($table,$colum,$value);
    
   
   
}