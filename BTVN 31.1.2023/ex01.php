<!-- Cho trước 1 mảng

$numbers = [1, 5, 2, 9, 5]

Yêu cầu: 

- Tìm giá trị lớn nhất, nhỏ nhất của mảng 
- Sắp xếp mảng theo thứ tự tăng dần (Không sử dụng hàm có sẵn)
- Chèn vào 1 phần tử nhưng không làm thay đổi thứ tự sắp xếp tăng dần -->
<?php
$numbers = [1, 5, 2, 9, 5];
echo 'Mảng ban đầu là :';
echo '<pre>';
print_r($numbers);
echo '</pre>';

$maxNumber = $numbers[0];
$minNumber = $numbers[0];

for($i = 0; $i < count($numbers); $i++){
    if($maxNumber <= $numbers[$i]){
        $maxNumber = $numbers[$i];
    }
    if($minNumber >= $numbers[$i]){
        $minNumber = $numbers[$i];
    }
}

echo 'Giá trị lớn nhất: '.$maxNumber;
echo '</br>';
echo 'Giá trị lớn nhất: '.$minNumber;
echo '</br>';

// ex 02:
echo 'sắp xếp tăng dần: ';

$numberTD = [];
for($i = 0; $i < count($numbers); $i++){

    $temp = 0;
    for($j = $i + 1; $j < count($numbers); $j++){
        if($numbers[$i] > $numbers[$j]){
            $temp = $numbers[$i];
            $numbers[$i] = $numbers[$j];
            $numbers[$j] = $temp;
        } 
    }
    $numberTD[] = $numbers[$i];

}
echo '<pre>';
print_r($numberTD);
echo '</pre>';
echo '</br>';
$pos = 0;
$chen = 3;
$count = count($numberTD);
for ($i = 0; $i < $count; $i++) {
    if ($chen < $numberTD[$i]){
        $k = $i;
        break;
    } else {
        $k = $count + 1;
    }
}
for ($i = $count; $i > $k; $i--){
    $numberTD[$i] = $numberTD[$i-1];
}
$numberTD[$k]=$chen;
    
echo 'chèn phần từ '.$chen.' vào mảng:';
echo '<pre>';
print_r ($numberTD);
echo '</pre>';