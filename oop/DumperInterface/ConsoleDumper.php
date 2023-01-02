<?php

require_once 'DumperInterface.php';

class ConsoleDumper implements DumperInterface
{
    public function dump(array $data)
    {
        var_dump($data);
    }
}