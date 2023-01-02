<?php

require_once 'ConsoleDumper.php';
require_once 'WebDumper.php';

if (PHP_SAPI === 'cli') {
    $dumper = new ConsoleDumper();
} else {
    $dumper = new WebDumper();
}


$dumper->dump([1,2,3,4,5]);


