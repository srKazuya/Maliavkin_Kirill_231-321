<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $m = "2+2*2";
    $a = explode("*", $m);
    print_r ($a );

   print_r (explode("+", $a) );
    ?>
</body>
</html>