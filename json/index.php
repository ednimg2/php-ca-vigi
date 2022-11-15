<?php
session_start();
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
}
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

<fieldset>
    <legend>ToDo List</legend>
    <?php
    $filename = 'todo.json';

    $filedata = json_decode(
        file_get_contents($filename),
        true
    );

    foreach (($filedata) ?? [] as $key => $item) {
        buildRow($key, $item);
    }

    function buildRow(int $key, array $item): void {
        if (is_array($item)) {
            echo '<div>' . sprintf('%s - Due data: %s / %s', $item['todo'], $item['due_date'], $item['due_time'])
                //echo ' <a href="delete.php?id='.$key.'">Delete</a>';
                . '<form action="delete.php" method="POST">'
                . '<input type="hidden" name="id" value="'.$key.'">'
                . '<input type="submit" value="Delete">'
                . '</form>'
                . '</div>';
        }
    }

    /*
    $file = fopen($filename, 'r');
    while (!feof($file)) {
        $textline = fgets($file);
        buildData($textline);
    }
    fclose($file);

    */
    ?>
</fieldset>
