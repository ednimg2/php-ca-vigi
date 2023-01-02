<?php

require_once 'Dumper.php';
class WebDumper extends Dumper
{
    public function dump(array $data)
    {
        $this->write();
        echo 'WEB: <pre>';
        var_dump($data);
        echo '</pre>';
    }
}