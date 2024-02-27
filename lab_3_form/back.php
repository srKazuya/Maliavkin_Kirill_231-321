<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <p class="wrapper text">
            <?php
                print_r(get_headers('https://www.youtube.com/'));
            ?>
        </p>
    </div>
    <a href="index.html">index</a>
</body>
</html>