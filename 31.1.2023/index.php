<?php

$students = array();

$students[] = 'Văn Tú';
$students[] = 'Văn Tú 1';
$students[] = 'Văn Tú 2';
$students[] = 'Văn Tú 3';
$students['age'] = 18;

$students['age'] = 17;

unset($students['age']);

foreach($students as $student){
    echo $student;
    echo '</br>';

}
echo '</br>';
print_r($students);