<?php
$files = ['1.txt', '2.txt', '3.txt'];

$newFile = fopen('new.txt', 'w');
foreach ($files as $file) {
    $content = file_get_contents($file);
    fwrite($newFile, $content);
}

fclose($newFile);
?>