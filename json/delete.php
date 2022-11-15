<?php

$filename = 'todo.json';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['id'])) {
    $filedata = json_decode(
        file_get_contents($filename),
        true
    );

    $id = $_POST['id'];

    if (isset($filedata[$_POST['id']])) {
        unset($filedata[$_POST['id']]);
    }

    file_put_contents(
        $filename,
        json_encode($filedata),
        LOCK_EX
    );

    header('Location: index.php');
}