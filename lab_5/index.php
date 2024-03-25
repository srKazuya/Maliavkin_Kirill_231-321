<?php
    $db = require('db.php');
    $connect = mysqli_connect($db['host'], $db['username'], $db['password'], $db['database']);
    if (mysqli_connect_errno()) print_r(mysqli_connect_error());
    if (!isset($_GET['p'])) $_GET['p']= 'view';
    if(isset($_POST['save'])) {
        $sql = "INSERT INTO `users`
        (`Name`, `Surname`, `Secondname`, `Gender`, `Bdate`, `Phone`, `Address`, `E-mail`, `Comment`) 
        VALUES (session_start();
        '".htmlspecialchars($_POST['name'])."',
        '".htmlspecialchars($_POST['surname'])."',
        '".htmlspecialchars($_POST['secondname'])."',
        '".htmlspecialchars($_POST['gender'])."',
        '".htmlspecialchars($_POST['bdate'])."',
        '".htmlspecialchars($_POST['phone'])."',
        '".htmlspecialchars($_POST['address'])."',
        '".htmlspecialchars($_POST['email'])."',
        '".htmlspecialchars($_POST['comment'])."'        
        )";
        mysqli_query($connect, $sql);
        if (mysqli_connect_errno()) print_r(mysqli_connect_error());
    }
    require('header.php');
        if ($_GET['p']==='view') include('view.php');
        if ($_GET['p']==='add') include('add.php');
        if ($_GET['p']==='delete') include('delete.php');
    require('footer.html');
?>