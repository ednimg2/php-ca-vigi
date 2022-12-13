<?php

/**
 * @return bool|mysqli
 */
function connectDb(): mysqli
{
    return mysqli_connect('127.0.0.1', 'root', 'dev', 'marketplace', '33073');
}
