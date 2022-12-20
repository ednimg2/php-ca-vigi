<?php

include_once 'File.php';

$file = new File('todo.txt', 'a+');

$file->write('Kazka');
echo $file->read();