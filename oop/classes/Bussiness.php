<?php 
class Bussiness extends Database{
    public function __construct()
    {
        parent::__construct(); //Gọi hàm __construc() của class cha (Database)
        echo 'construc from Bussiness </br>';
    }

    public function query(){
        parent::query();
        echo 'query from Bussiness';
    }

    public function getDetail(){
        $this->fetch();
    }
}