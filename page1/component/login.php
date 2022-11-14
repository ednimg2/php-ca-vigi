<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_POST['username'] !== '' && $_POST['password'] !== '') {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['is_logged'] = true;
        }
    }

    $isLogged = ($_SESSION['is_logged']) ?? false;
?>

<?php
if ($isLogged === true) {
    echo 'Hello, '. $_SESSION['username'];
    echo ' <a href="logout.php">Logout</a>';
} else {
?>
    <form method="post">
        <lable>User: </lable><input type="text" name="username">
        <label>Password: </label><input type="password" name="password">
        <input type="submit" value="Login">
    </form>
<?php
}
?>