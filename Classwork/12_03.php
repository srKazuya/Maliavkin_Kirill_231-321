<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // preg_match_all('/x(a+)x/', 'xxxx axax xaaaxaxx xaaaaa', $matches);
    // // print_r($matches);

    // preg_match_all('/[a-z]+\.([a-z]{2,3})/', 'domain.ru hello.by mail.com', $matches);
    // // print_r($matches);
    // foreach ($matches[1] as $matches) {
    //     echo $matches. '<br>';
    // }
    // echo preg_replace('/(a+)@(b+)/', '$2@$1', 'a@b aa@bb')

    // echo preg_replace('/[a-z]+/', '!$0!', 'aaa bbb');


    // echo preg_replace('/([a-z])\1}/', '!', 'aaebbc');

    // echo preg_replace('/(ab)+([a-z])/', '!$1!', 'ab abx abe');

    // echo preg_replace('/([a-z]+):/'

    // echo preg_replace( '/(\d)\1/','!','332 441 550')

    // echo preg_replace('/(?<=x)a+/', '!', 'xaa baa');

    // echo preg_replace('/(?<!x)a+/', '!', 'xaa baa');
    
    // echo preg_replace('/\d/', '$0$0', 'a1b2c3');
    // preg_match('/^(http|https):\\/\\/[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$/', ' http://site.ru', $matches);
    // print_r ($matches);


//   preg_match_all('/(\w)\1+/', 'aaa bcd xxx efg', $matches);
    // echo preg_replace('/([a-z])\1/', '!', 'aae xxz 33a');
    // echo preg_replace('/(\/)|(\\\)/', '!', 'bbb /aaa\ bbb /ccc\\');
    // preg_match_all('/(\w)\1+/', 'aaa bcd xxx efg', $matches);
    // print_r ($matches);
    // foreach ($matches[0] as $matches) {
    // echo $matches. '<br>';
    // }

    echo preg_replace('/aaa(?!b)/', '!', 'aaaw aaab aaas');
    preg_match_all('/(\w)\1+/', 'aaa bcd xxx efg', $matches);
    print_r($matches);

    preg_match_all('/a(b+)a/', 'aa aba abba abbba abca abea', $matches);
    print_r($matches[0]);
    ?>
</body>
</html>