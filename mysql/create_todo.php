<?php
session_start();

require_once 'connection.php';

$mysql = connectDb();

if (isset($_SESSION['error'])) unset($_SESSION['error']);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['todo'])) {
    $stmt = mysqli_prepare($mysql, "INSERT INTO todo (`todo`, `due_date`, `due_time`) VALUE (?,?,?)");
    //INSERT INTO todo (`todo`, `due_date`, `due_time`) VALUE ('Ismok PHP', '2022-12-20', '11:11:11')

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'sss', $_POST['todo'], $_POST['due_date'], $_POST['due_time']);
        mysqli_stmt_execute($stmt);
    } else {
        $_SESSION['error'] = 'Query builder error';
    }

    header('Location: index.php');
} else {
    $_SESSION['error'] = 'Todo param is empty';
    header('Location: index.php');
}