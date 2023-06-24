<?php 
class Database{

    public function __construct()
    {
        echo 'construct database class </br>';
    }
    public function query(){
        
        echo 'query database </br>';
    }
    public function fetch(){
        echo 'fetch method from database </br>';
    }
}