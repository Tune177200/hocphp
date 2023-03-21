<?php 
    require_once 'config.php';
    require_once 'connect.php';
    require_once 'functions.php';

//    update('users', [
//         'name' => "tune",
//         'email'    => 'tune@gmail.com'
//    ], "id = 21");

// delete("users", "id=19");

// $groups = first("SELECT * FROM users");

// echo '<pre>';
// print_r($groups);
// echo '</pre>';
// echo '<pre>';
// print_r($groups);
// echo '</pre>';

echo getRows("SELECT * FROM users ");
