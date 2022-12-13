<?php

/**
 * @return bool|mysqli
 */
function connectDb(): mysqli
{
    return mysqli_connect('localhost:33073', 'root', 'dev', 'marketplace');
}
