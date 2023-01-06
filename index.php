<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //bài 1: bảng cửu chương
    echo '<h1>Bảng cửu chương: </h1>';
    for ($i = 1; $i <= 10; $i++) {
        echo ' <table> <tr>';
        for ($j = 1; $j <= 10; $j++) {
    ?>
            <?php echo '<th>' . $i . 'x' . $j . '=' . ($i * $j) . '</th>'; ?>
    <?php
        }
        echo '</table> </tr>';
    }

    // bài 2: số nguyên tố
    echo '<h1>Số nguyên tố: </h1>';

    function checkSnt($n)
    {
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
    $n = 7;
    $tong = 0;
    for ($i = 2; $i <= $n; $i++) {
        if (checkSnt($i)) {
            $tong += $i;
        }
    }
    echo 'Tổng các số nguyên tố:' . $tong;

    // bài 3: Fibonaci
    echo '<h1>Fibonaci: </h1>';
    $k = 1;
    $f = 0;
    for ($i = 1; $i < 100; $i++) {
        $i = $k + $f;
        $k = $f;
        $f = $i;
        echo $i . '</br>';
        //    1 = 1 + 0 = 1
        //    2 = 0 + 1 = 1
        //    2 = 1 + 1 = 2
        //    3 = 1 + 2 = 3
        //    4 = 2 + 3 = 5
        //    6 = 3 + 5 = 8
        //    9 = 5 + 8 = 13
        //    14 = 8 + 13 = 21
        //    22 = 13 + 21 = 34
        //    45 = 21 + 34 = 55
        //    56 = 34 + 55 = 89
        //    90 = 55 + 89 = 144
        //    144 > 100 k hợp lệ
    }
    ?>
</body>

</html>