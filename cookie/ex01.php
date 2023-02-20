<?php 
// echo time();
$customer = [
    'name' => 'Tu',
    'email' => 'tu@gmail.com'
];
// setcookie('customer', json_encode($customer), time() + 86400, '/');
setcookie('customer', '', time() - 86400, '/');

echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

$customer = $_COOKIE['customer'];
$customer = json_decode($customer, true);

echo '<pre>';
print_r($customer);
echo '</pre>';