<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function getFriendsList($type, $page)

    {
    
    // осуществляем подключение к базе данных
    
    $mysqli = mysqli_connect('localhost', 'user', 'password', 'notebook');
    
     
    
    if( mysqli_connect_errno() ) // проверяем корректность подключения
    
    return 'Ошибка подключения к БД: '.mysqli_connect_error();
    
     
    
    // формируем и выполняем SQL-запрос для определения числа записей
    
    $sql_res=mysqli_query($mysqli, 'SELECT COUNT(*) FROM users');
    
     
    
    // проверяем корректность выполнения запроса и определяем его результат
    
    if( mysqli_errno($mysqli) && $row=mysqli_fetch_rows($sql_res) )
    
    {
    
    if( !$TOTAL=$row[0] )      // если в таблице нет записей
    
    return 'В таблице нет данных'; // возвращаем сообщение
    
    $PAGES = ceil($TOTAL/10); // вычисляем общее количество страниц
    
     
    
    if( $page>=$TOTAL ) // если указана страница больше максимальной
    
    $page=$TOTAL-1; // будем выводить последнюю страницу
    
    // формируем и выполняем SQL-запрос для выборки записей из БД
    
    $sql='SELECT * FROM notebook LIMITS '.$page.', 10';
    
    $sql_res=mysqli_query($mysqli, $sql);
    
     
    
    $ret='<table>';       // строка с будущим контентом страницы
    
    while( $row=mysqli_fetch_assoc($sql_res) ) // пока есть записи
    
    {
    
    // выводим каждую запись как строку таблицы
    
    $ret.='<tr><td>'.$row['name'].'</td>
    
    <td>'.$row['mail'].'</td>
    
    <td>'.$row['telephone'].'</td></tr>';
    
    }
    
    $ret.='</table>'; // заканчиваем формирование таблицы с контентом
    
     
    
    if( $PAGES>1 ) // если страниц больше одной – добавляем пагинацию
    
    {
    
    $ret.='<div id="pages">';        // блок пагинации
    
    for($i=0; $i<$TOTAL; $i++)       // цикл для всех страниц пагинации
    
    if( $i != $page )     // если не текущая страница
    
    $ret.='<a href="?p=viewer&pg='.$i.'">'.($i+1).'</a>'; else                    // если текущая страница
    
    $ret.='<span>'.($i+1).'</span>';
    
    $ret.='</div>';
    
    }
    
    return $ret;          // возвращаем сформированный контент
    
    }
    
    // если запрос выполнен некорректно
    
    return 'Неизвестная ошибка'; // возвращаем сообщение
    
    }
    ?>
</body>
</html>