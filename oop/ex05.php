<?php

use Person as GlobalPerson;

class Person{
    private $name;
    private $email;

    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
    }
    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        // echo 'Hàm này sẽ chạy khi gán dữ liệu cho thuộc tính private';
        $this->$name = $value;
    }
}
$person = new Person('tune', 'tu@gmail.com');
$person->name = 'PHP';
echo $person->name;
echo $person->email;