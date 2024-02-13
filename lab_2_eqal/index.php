<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- 6/x=2 -->
<body>
    <h1>Лабораторная работа№2</h1>
    <?php
    $stock = "6/x=2";

    $parts =  explode("=", $stock);
    $left = $parts[0];
    $right = $parts[1];

    $opera =  explode("/", $left);
    $numerator = $opera[0];
    $denominator = $opera[1];
    
    echo 'Уравнение равно - '.$numerator/$right. '<br>';

    if (strpos($left, '/') !== false){
        $operator = '/';
    } else {
        $operator = '*';
    }
    
    if (strpos($numerator, 'x') !== false){
        $position = "Числитель";
    } else if (strpos($denominator, 'x') !== false){
        $position = "Знаменатель";
    }

    echo 'Расположение неизвестной переменной - '.$position; 


    ?>
</body>
</html>