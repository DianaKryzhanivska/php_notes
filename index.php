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
        echo $str . ': ' . $number . $num; // 50

    ?>


    
</body>
</html>