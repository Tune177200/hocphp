<?php
// Bài 1
$luong = 7000000;
$mucThue = 0;
$thueThuNhap = 0;
if($luong >= 15000000){
    $mucThue = 30/100;
}else if($luong >= 7000000 && $luong < 15000000){
    $mucThue = 20/100;
}else{
    $mucThue = 10/100;
}
$thueThuNhap = $luong * $mucThue ;
$luongNhan = $luong - $thueThuNhap;
echo '<h1>Bài tập 1:</h1>';
echo '<h3>Lương: '. $luong .'</h3>';
echo '<h3>Thuế thu nhập '. ($mucThue*100) .'% : '. $thueThuNhap .'</h3>';
echo '<h3>Tiền lương thực nhận: '. $luongNhan .'</h3>';

// Bài 2
echo '<h1>Bài tập 2:</h1>';
$tuoi = 16;

echo '<h3>Tuổi của học sinh: '. $tuoi .'</h3>';
if($tuoi >=16){
    echo '<h3>Học sinh đủ tuổi vào lớp 10</h3>';
}else{
    echo '<h3>Học sinh không đủ tuổi vào lớp 10</h3>';
}

// Bài 3
echo '<h1>Bài tập 3:</h1>';
$a = 5;
$b = 6;
$c = 7;
echo '<div>Số a là ' .$a.'</div>';
echo '<div>Số b là ' .$b.'</div>';
echo '<div>Số c là ' .$c.'</div>';
if($a>=$b && $a>=$c){
    echo $a .' lớn nhất';
}else if($b>=$a && $b>=$c){
    echo $b .' lớn nhất';
}else if($c>=$a && $c>=$b){
    echo $c .' lớn nhất';
}else{
    echo 'Vui lòng nhập giá trị hợp lệ';
}
// Bài 4
echo '<h1>Bài tập 4:</h1>';
$a = 10;
$b = 7;
echo 'Trước hoán vị';
echo '<div>a = '.$a.'</div>';
echo '<div>b = '.$b.'</div>';
echo 'Sau hoán vị: ';
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo '<div>a = '.$a.'</div>';
echo '<div>b = '.$b.'</div>';

// Bài 5
echo '<h1>Bài tập 5:</h1>';

$diemKT = 7.8;
$diemTGK = 8.2;
$diemTCK = 2.3;

if($diemKT>10){
    echo '<div>Vui lòng nhập điểm bài kiểm tra dưới 10</div>';
}else if($diemTGK>10){
    echo '<div>Vui lòng nhập điểm thi giữ kỳ dưới 10</div>';

}else if($diemTCK>10){
    echo '<div>Vui lòng nhập điểm thi cuối kỳ dưới 10</div>';
    
}else{
    $diemTB = ($diemKT + $diemTGK + $diemTCK)/3;
    if($diemTB >= 9.0){
        echo 'Xếp hạng A';
    }else if($diemTB >= 7.0 && $diemTB < 9.0){
        echo 'Xếp hạng B';
    }else if($diemTB >= 5.0 && $diemTB <7.0){
        echo 'Xếp hạng C';
    }else{
        echo 'Xếp hạng F';
    }
}

