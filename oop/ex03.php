<?php

use Person as GlobalPerson;

class Person{
    private $name;
    public $email;

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
}
$person = new Person();
echo $person->setEmail('tune@gmail.com');
echo $person->getEmail();

/**
 * Setter
 * Getter
 */