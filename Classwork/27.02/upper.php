<?php
        $arr = explode(' ', $_POST['text']);
        upper($arr);
        foreach ($arr as $value){
            echo $value. ' ';
        }
        function upper(&$arr){
            foreach ($arr as $key => $value) {
                if($key%2) $arr[$key] = strtoupper($value);
            }
        }

?>