<?php

$customers = [
    [
        'name' => 'vantu',
        'email' => 'vantu@gmail.com',
        'address' => 'Mexico'
    ],
    [
        'name' => 'vantu 1',
        'email' => 'vantu1@gmail.com',
        'address' => 'Mexico'
    ],
    [
        'name' => 'vantu 2',
        'email' => 'vantu2@gmail.com',
        'address' => 'Mexico'
    ],
];


$customers[] = [
    'name' => 'mex',
    'email' => 'vantu2@gmail.com',
    'address' => 'Mexico'
];
echo '<pre>';
print_r($customers);
echo '</pre>';

if(!empty($customers)){
    foreach($customers as $customer){
        echo $customer['name'] . '-' . $customer['email'] . '</br>';
    }
}