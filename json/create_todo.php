<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['todo'])) {
    $filename = 'todo.json';

    $filedata = json_decode(
        file_get_contents($filename),
        true
    );

    $filedata[] = $_POST;


    file_put_contents(
        $filename,
        json_encode($filedata),
        LOCK_EX
    );

    if (isset($_SESSION['error'])) unset($_SESSION['error']);

    header('Location: index.php');
} else {
    $_SESSION['error'] = 'Todo param is empty';
    header('Location: index.php');
}