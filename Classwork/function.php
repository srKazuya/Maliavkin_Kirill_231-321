<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//     function test($n){
//         $k=1;
//         for ($i = 1; $i <= $n; $i++) 
//             $k = $k * $i;
//             return $k;
//         }
//     function factRec ($n){
//         if($n < 2) return 1;
//         else return $n = factRec($n-1);
//     }
//     echo factRec(4);
//     echo 

//     list($name, $female, $age) = spisok();
//     echo $female.' '.$name. 'возраст ='.$age.'<br>';
//     function spisok(){
//         $v=7;
//         return array('Маша', 'Петровна', $v);
//     }
//    function sum (){
//         $n=5;
//         $s=6;
//         return $b=$n+$s;
//     }

    $a=2;
    $b=f($a);
    echo "a = $a<br>";
    echo "b = $b<br>";

    function f($n){
        $a=5;
        $n++;
        echo "function a = $a<br>";
        global $a;
        $b = $a+$n;
        global $a;
        $a++;
        return $b;
    }
    $b = $f($a);
    echo "repeat b = $b<br>";
    ?>
</body>
</html>