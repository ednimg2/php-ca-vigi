<?php

require_once 'ConsoleDumper.php';
require_once 'WebDumper.php';

if (PHP_SAPI === 'cli') {
    $dumper = new ConsoleDumper();
} else {
    $dumper = new WebDumper();
}

$dumper->dump([3,3,4,56,6]);