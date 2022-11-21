<form action="create_todo.php" method="POST">
    <fieldset>
        <legend>ToDo</legend>
        <input type="text" name="todo">
        <input type="submit" value="Send">
    </fieldset>
</form>

<fieldset>
    <legend>ToDo List</legend>
    <?php
        $filePath = 'files/todo.txt';
        $fileResource = fopen($filePath, 'r');

        while (!feof($fileResource)) {
            printTodoItem(fgets($fileResource));
        }

        fclose($fileResource);
    ?>
</fieldset>

<?php

function printTodoItem(string $item): void
{
    $data = explode(';', $item);

    echo sprintf('<div>%s Created at: %s</div>', $data[0], $data[1] ?? '-');
}
