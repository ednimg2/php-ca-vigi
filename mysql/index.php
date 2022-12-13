<?php
session_start();

require_once 'connection.php';
$mysql = connectDb();

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

<?php
    $query = "SELECT * FROM todo";
    $result = mysqli_query($mysql, $query);

    function printTodoRow(array $row): string
    {
        return "<tr>
            <td>{$row['todo']}</td>
            <td>{$row['due_date']}</td>
            <td>{$row['due_time']}</td>
            <td>
                <form action=\"delete.php\" method=\"POST\">
                    <input type=\"hidden\" name=\"id\" value=\"{$row['id']}\">
                    <input type=\"submit\" value=\"Delete\">
                </form>
            </td>
        </tr>";
    }
?>

<fieldset>
    <legend>ToDo List</legend>
    <table>
    <?php
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                echo printTodoRow($row);
            }
        } else {
            echo '<tr><td>Nepavyko uzkrauti duomenu</td></tr>';
        }
    ?>
    </table>
</fieldset>
