<?php

setcookie('user', 'mindaugas');
//header('Location: /cookies.php');

//setcookie('language', 'lt', time() + 3600);
setcookie('language', 'lt', time() - 3600);
var_dump($_COOKIE);