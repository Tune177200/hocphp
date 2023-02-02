<?php

$numbers = [
    5, 8, 1, 2
];

unset($numbers[1]);
$numbers = array_values($numbers);

$customers = [
    'name'  => 'Văn Tú',
    'age'   => 18,
    'address' => 'Hà Nội'
];


// $lastDelete = array_pop($customers);
// $count = array_push($customers, 'Item 1', 'Item 3', 'Item 4');   //REST Params

// $firstDelete = array_shift($customers);

sort($customers);

$customers = array_reverse($customers);

echo '<pre>';
print_r($customers);
echo '</pre>';

// echo $count;