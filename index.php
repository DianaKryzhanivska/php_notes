<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>

    <h1>Hello</h1>

    <?php
        echo "this is <b>php</b> script";
        echo "<br>hello";
        echo "\"";
        echo '<br>"<br>';

        // Comment
        # Comment

        /*
            comment
        */
    ?>

    <?php
        // створити константу - прийнято записувати у ВЕРХНЬОМУ РЕГІСТРІ
        define(MY_AGE, 18);
        echo MY_AGE . '<br>'; // без $

        // не строга типізація
        $a = 0.5;
        $b = '0.5';
        echo $a + floatval($b); // 1 (не строга типізація) 
        // intval 

        $number = 5; // int (integer)
        $num = -0.55; // float
        $str = "variable"; // string
        $bool = true; // boolean
        echo $str . ': ' . $number . $num . '<br>'; // 50

    ?>

    <?php

    $x = 10;
    $y = 20;

    $x += 10; // $x = $x + 10
    echo $x . '<br>'; // 20

    $x++;
    $y--;

    echo $x . '<br>'; // 21
    echo $y . '<br>'; // 19

    echo M_PI . '<br>'; // 3.14

    echo abs(-22) . '<br>'; // 22 (повертає позитивне число)
    echo ceil(3.1) . '<br>'; // 4 (округлення до більшого)
    echo floor(3.9) . '<br>'; // 3 (округлення до меншого)
    echo round(3.4134314312, 2) . '<br>'; // 3.41 
    echo mt_rand(1, 20) . '<br>'; // рандом число від 1 до 20
    echo min(9, 6, 3) . '<br>'; // 3
    echo max(9, 6, 3) . '<br>'; // 9
    ?>

    <?php
        $str = "Hello";
        echo "VAR: $str" . '<br>'; // VAR: Hello     // одинарні лапки не підходять VAR: $str

        echo "<input type='text'/>" . '<br>';
        echo "<input type=\"text\"/>" . '<br>'; // якщо подвійні лапки -  \"text\" 

        $length = strlen($str);
        echo $length . '<br>';

        echo trim("   one   ") . '<br>';

        echo strtolower("LOWER") . '<br>';
        echo strtoupper("upper") . '<br>';

        echo md5("qwerty") . '<br>'; // d8578edf8458ce06fbc5bb76a58c5ca4 хеш

    ?>

    <?php
        $str = "Hello";
        if ($str == "Hello") {
            echo "YES" . '<br>';
        } else {
            echo "NO" . '<br>';
        }
        // якщо всередині if/else лише 1 рядок, можна не використовувати фігурні лапки
        if ($str == "Hello")
            echo "TRUE" . '<br>';
        else 
            echo "FALSE" . '<br>';


        $arr = [1, 0.5, true, "text", 46];
        echo $arr[1] . '<br>'
    ?>
    
</body>
</html>