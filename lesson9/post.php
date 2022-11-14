<?php
    session_start();
?>
<html>
    <head>
        <title>Mano puslapis</title>
    </head>
    <body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['user'] && $_POST['password'] && $_POST['user'] === 'aaaaa') {
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['is_logged'] = true;
    }

    if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']) {
        echo 'Hello, ' . $_SESSION['user'];
    } else {
    ?>
        <form action="post.php" method="post">
            <label>User:</label>
            <input type="text" name="user" value="">
            <hr>
            <label>Password:</label>
            <input type="password" name="password" value="">
            <input type="submit" value="Go">
        </form>
        <hr>
    <?php } ?>
    <?php
        /*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo ($_REQUEST['first_name']) ?? '-';
            echo '<br>'; // ($a) ?? null  (is_array($a)) ? $a : null
            echo ($_REQUEST['last_name']) ?? '-';

            $_SESSION['first_name'] = $_POST['first_name'];
            $_SESSION['cart'][] = 23232;
        }
        //var_dump($_SERVER['REQUEST_METHOD']);
        var_dump($_SESSION);*/
    ?>
    </body>
</html>
<?php //session_destroy() ?>