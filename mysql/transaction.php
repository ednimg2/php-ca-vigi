<?php
try {
    $mysql = mysqli_connect('localhost:330733', 'root', 'dev', 'marketplace');
} catch (mysqli_sql_exception $exception) {
    var_dump($exception);
    die;
}

$mysql->begin_transaction();

try {
    $mysql->query("INSERT INTO `products` (`category_id`, `name`, `price`, `quantity`) VALUES (2, 'Duona 8', 23, 2)");
    $mysql->query("INSERT INTO `categories` (`name`) VALUES ('Category 8')");
    echo 'Insert done!';
} catch (mysqli_sql_exception $exception) {
    var_dump($exception);
    $mysql->rollback();
}

$mysql->query("INSERT INTO `categories` (`name`) VALUES ('Category 9')");
$mysql->commit();