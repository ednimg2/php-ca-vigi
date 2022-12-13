<?php

require_once 'connection.php';

$mysql = connectDb();

$stmt = mysqli_prepare($mysql, "INSERT INTO todo (`todo`, `due_date`, `due_time`) VALUE (?,?,?)");
$val1 = 'Ismok PHP';
$val2 = '2022-12-20';
$val3 = '11:11:11';

mysqli_stmt_bind_param($stmt, 'sss', $val1, $val2, $val3);
mysqli_stmt_execute($stmt)
?>

<form action="create_todo.php" method="POST">
    <fieldset>
        <legend>ToDo</legend>
        <input type="text" name="todo">
        <input type="date" name="due_date" value="2022-03-29">
        <input type="time" name="due_time" value="22:00">
        <input type="submit" value="Send">
    </fieldset>
</form>
