<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Задание 1
    echo preg_replace('/aaa(?!b)/', '!', 'aaaw aaab aaas').'<br>';
    //Задание 2
    preg_match_all('/(\w)\1+/', 'aaa bcd xxx efg', $matches);
    print_r($matches[0]).'<br>';
    //Задание 3
    preg_match_all('/a(b+)a/', 'aa aba abba abbba abca abea', $matches);
    print_r($matches[0]).'<br>';
    //Задание 4
    preg_match_all('/a\da/', 'a1a a2a a3a a4a a5a aba aca a114242412a', $matches);
    print_r($matches[0]);
    ?>
</body>
</html>