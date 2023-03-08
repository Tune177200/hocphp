<?php 
// cách tạo object trong php

/**
 * Cách 1: Convert từ array(ép kiểu)
 * Cách 2: Tạo class=> tạo object từ class
 * Cách 3: Tạo object từ class rỗng: stdClass()
 */

//  Cách 1:

// $customers = [
//     'name'  => 'Văn Tú',
//     'email' => 'tu@gmail.com',
// ];

// $customerObj = (object)$customers;


// echo $customerObj->name.'<br/>';
// echo $customerObj->email.'<br/>';

// Cách 2: Tạo class

// class Customer{
//     public $name = 'tú';
//     public $email = 'tu@gmail.com';

//     const MSG = 'Xin chào PHP';

//     public function getName(){
//         return 'Tu Demotam';
//     }
// }

// $customers = new Customer();

// echo $customers->name .'<br/>';
// echo $customers->email .'<br/>';
// echo $customers->getName() .'<br/>';
// echo Customer::MSG.'<br/>';
// echo $customers::MSG.'<br/>';

// Cách 3: Tạo object từ class rỗng: stdClass()

$customers = new stdClass();
$customers->name = 'Tune';
$customers->email = 'Tu@gmail.com';
echo $customers->name .'<br/>';
echo $customers->email .'<br/>';