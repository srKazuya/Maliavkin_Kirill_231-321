<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function renderMenu() {
    $menuItems = ['Просмотр', 'Добавление записи', 'Редактирование записи', 'Удаление записи'];
    $additionalItems = ['Сортировка по дате добавления', 'Сортировка по фамилии', 'Сортировка по дате рождения'];
    $activeItem = isset($_GET['menu']) ? $_GET['menu'] : 'Просмотр';
    $activeSubItem = isset($_GET['sort']) ? $_GET['sort'] : $additionalItems[0];

    echo '<style>.menu { margin: 0; padding: 0; } .menu li { display: inline; } .menu li a { color: blue; margin-right: 10px; } .menu li a.active { color: red; }</style>';
    echo '<ul class="menu">';
    foreach ($menuItems as $item) {
        echo '<li><a href="?menu=' . $item . '"' . ($activeItem == $item ? ' class="active"' : '') . '>' . $item . '</a></li>';
    }
    echo '</ul>';

    if ($activeItem == 'Просмотр') {
        echo '<ul class="menu" style="font-size: smaller;">';
        foreach ($additionalItems as $item) {
            echo '<li><a href="?menu=' . $activeItem . '&sort=' . $item . '"' . ($activeSubItem == $item ? ' class="active"' : '') . '>' . $item . '</a></li>';
        }
        echo '</ul>';
    }
}
?>
</body>
</html>