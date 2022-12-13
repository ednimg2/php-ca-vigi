<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['todo'])) {
    $stmt = mysqli_prepare();
}