<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['todo'])) {
    $filePath = 'files/todo.txt';

    $fileResource = fopen($filePath, 'a');

    //fwrite($fileResource, $_POST['todo'] . ';' . date('Y-m-d') . PHP_EOL);
    fwrite($fileResource, sprintf('%s;%s' . PHP_EOL, $_POST['todo'], date('Y-m-d')));

    fclose($fileResource);

    header('Location: todo.php');
} else {
    header('Location: todo.php');
}