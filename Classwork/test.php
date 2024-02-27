<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //  echo 'k='.$k.'<br>';
    // ex 1
    $a = 27;
    $b = 12; 
    echo round(sqrt($a ** 2 + $b ** 2), 2);
    echo "<br>";
    // ex 9
    $a = 2; 
    $b = 2.0; 
    $c = '2';
    $d = 'two';
    $g = true;
    $f = false;
    echo gettype($a + $c).'<br>';
    echo gettype($a + $g).'<br>';
    echo gettype($a + $f).'<br>';
    echo gettype($g + $f).'<br>';
    echo gettype($f + $g).'<br>';
    // ex 8
    $b = true;
    $a = false;
    var_dump($b);
    echo '<br>';
    var_dump($a);
    echo '<br>';
    // ex 10
    $hunter = 'охотник';
    $wants_to = 'желает';
    $know = 'знать'; 
    $fizan = 'фазан'; 
    $sits = 'сидит';
    echo "Каждый $hunter $wants_to $know где $sits $fizan".'<br>';
    // ex 15
    $give = 'Дают';
    $take = 'бери';
    $beat = 'бьют';
    $run = 'беги'; 
    echo $give. '-'. $take. ' '. $beat. '-'. $run.'<br>';
    // ex 19
    $a = 4.6;
    $b = 7.3;
    $c = '3.8';
    $d = '8.9кг';
    echo floor($a).'<br>';
    echo floor($b).'<br>';
    echo floor($c).'<br>';
    echo floor((float)$d).'<br>';
    echo ceil($a).'<br>';
    echo ceil($b).'<br>';
    echo ceil($c).'<br>';
    echo ceil((float)$d).'<br>';
    echo round($a).'<br>';
    echo round($b).'<br>';
    echo round($c).'<br>';
    echo round((float)$d).'<br>';
    // ex 22
    $a = 4;
    $b = 3;
    $c = ' мандаринок';
    $d = $a*2+$b+1;
    echo $d .' ' .$c.'br';
    //ex 29
    $a = 2;
    $b = '2';
    $d = '2a';
    var_dump($a == $b);
    var_dump($a === $b);
    
    //masisve
    $m3 = array(
        1    => 1,
        2  => "block",
        3  => "Bstria",
        4 => "austria",
    );
    sort($m3);
    foreach ($m3 as $key => $value) {
        echo $key.'-'. $value. '<br>';
    };



    $m2 = [
        [1, 2, 3],
        ['one', 'two'],
        ['a', 2, 'b', 4]
    ];
    var_dump($m2);

//     foreach ($m2 as $arr) {
//         foreach ($arr as $value) {
//             echo $value.',';
//     } echo '<br>';
// } 
    $m4[0] = 'blue';
    $m4[1] = 'yellow';
    for ($i = 0; $i < count($m3); $i++) {
        echo $m4[$i].'<br>';
    };$M[0]=100;

    $M[1]=200;
    
    $M['red']='красный';
    
    $M[3]=NULL;
    
    $M[4]=FAlSE;
    
    $M[5]='';
    
    $M[8]=300;
 
    foreach ($M as $key => $value) {
        if (is_null($value)) {
        echo $key.'-'. $value. '<br>'; 
    }

    ?>
</body>
</html>