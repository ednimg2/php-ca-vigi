<?php

require_once 'Dumper.php';
class ConsoleDumper extends Dumper
{
    public function dump(array $data)
    {
        var_dump($data);
    }
}