<?php
class Category extends MysqliConnect{
    private $cateName , $cateLink;
    public function addSetInput($name,$link){
        $this->cateName=$this->esc($this->html($name));
        $this->cateLink=$this->esc($this->html($link));
        $this->cateLink= trim(str_replace(' ','-',$link));
    }
    private function checkSetInput(){
        if(empty($this->cateName)){
            Messages::setMsg('Pless!', ' Enter Category Name', 'danger');
            echo Messages::getMsg();
        }
        elseif (empty ($this->cateLink)) {
        Messages::setMsg('Pless!', ' Enter Category Link', 'danger');
            echo Messages::getMsg();
        }
        elseif (!preg_match('/^[a-zA-Z0-9]/',$this->cateLink)) {
        Messages::setMsg('Pless!', ' Use English only to insert the link', 'danger');
            echo Messages::getMsg();
        }
        else {
            return TRUE;
         }
         return FALSE;
    }
    public function displayAddError(){
        if($this->checkSetInput()){
            if(!$this->InsertNewCate() ){
                 Messages::setMsg("Sorry!! ", " an unexpected error occurred while loading data","danger");
            echo Messages::getMsg();
            }
        }
    }
    private function InsertNewCate(){
       $this->insert("`category`","`cate_name`, `cate_link`"," '$this->cateName','$this->cateLink'");
       if($this->execute()){
           Messages::setMsg('Well!', ' Category added sccessfully ', 'seccusses');
            echo Messages::getMsg();
       }
       
    }
}

