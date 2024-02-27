<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array = array('a', 'b', 'c', 'b', 'a');
    $counts = array_count_values($array);
    foreach ($counts as $key => $value) {
    echo "Буква '$key' встречается $value раз(а). <br>";
    }

    $array = array('a'=>1, 'b'=>2, 'c'=>3);
    $array_flipped = array_flip($array);
    print_r($array_flipped);

    $array = array(1, 2, 3, 4, 5);
    $array_reversed = array_reverse($array);
    print_r($array_reversed);

    $array = array('a'=>1, 'b'=>2, 'c'=>3);
    $keys = array_keys($array);
    $values = array_values($array);
    print_r($keys);
    print_r($values);

    $array = array('a'=>1, 'b'=>2, 'c'=>3);
    $random_key = array_rand($array);
    echo "Случайный элемент массива: " . $array[$random_key];

    $array = array(1, 2, 3, 4, 5);
    array_unshift($array, 0); 
    array_push($array, 6);
    print_r($array);
    
    $array = array(1, 2, 3, 4, 5);
    $array_splice = array('a', 'b', 'c');
    array_splice($array, 3, 0, $array_splice);
    print_r($array);

    $arr = array('a', 'b', 'c', 'd', 'e');
    $last_element_index = count($arr) - 1;
    $last_element = $arr[$last_element_index];
    echo "Последний элемент массива: " . $last_element;

    $array = array('a', '-', 'b', '-', 'c', '-', 'd');
    $first_dash_position = array_search('-', $array);
    echo "Позиция первого элемента '-' в массиве: $first_dash_position";

    $array = array(1, 2, 3, 4, 5);
    $result = array_slice($array, 1, 3);
    print_r($result);
    ?>
</body>
</html>