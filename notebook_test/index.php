<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/lab_5_notebook/style.css">
    <title>Document</title>
</head>

<body>
    <header class="wrapper">
        <nav>
            <?php
            require 'menu.php';
            renderMenu();
            if( $_GET['sort'] == 'Сортировка по дате добавления' ) { include 'viewer.php'; } else if( $_GET['sort'] == 'add' ) { include 'add.php'; } else
            if( $_GET['p'] == 'edit' ) { include 'edit.php'; } else
            if( $_GET['p'] == 'delete' ) { include 'delete.php'; }
            ?>
            <?php
            
            ?>
        </nav>
    </header>
    <main class="wrapper">

    </main>
</body>

</html>