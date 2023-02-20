<?php
// $email = 'tu.web@gmail.com';

// kiếm tra email có hợp lệ hay không?

// $check = filter_var($email, FILTER_VALIDATE_EMAIL);

// var_dump($check);
$age = 41;
$check = filter_var($age, FILTER_VALIDATE_INT, ['options' =>[
    'min_range' => 30,
    'max_range' => 40
]]);

var_dump($check);