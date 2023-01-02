<?php

require_once 'DumperInterface.php';

class WebDumper implements DumperInterface
{
    public function dump(array $data)
    {
        echo 'WEB: <pre>';
        var_dump($data);
        echo '</pre>';
    }
}