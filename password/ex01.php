<?php 
$password = '123456';
// $passwordHash = password_hash($password, PASSWORD_DEFAULT);
// echo $passwordHash;

$dbHash = '$2y$10$aJ6SH5QKGnpvNT0N58uZlO.7ob86xcDc0NXfZZDkaJIFb.LEpe/8m';

$checkPassword = password_verify($password, $dbHash);

var_dump($checkPassword);