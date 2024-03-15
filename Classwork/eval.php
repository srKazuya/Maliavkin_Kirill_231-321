<?php

    // $f = 'sin';
    // $x = 30;
    // eval("\$z = $f($x/180*pi());");
    // echo $z;


    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $fio = $_GET['fio'];
        $x = $_GET['x'];
            $str = "Фамилия = $fio, Оклад = $x";
            eval("\$str = \"$str\";");
            echo $str; "\n";
    }

?>