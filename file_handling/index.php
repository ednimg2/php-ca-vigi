<?php

//$fileContent = readfile('text.txt');
//readfile('text.txt');

//var_dump($fileContent);

$filePath = 'files/text.txt';

/*$fileResource = fopen($filePath, 'r') or die('I can\'t read file');
echo filesize($filePath);
echo $fileResource;
echo fread($fileResource, filesize($filePath));
echo fread($fileResource, 10);
fclose($fileResource);*/

/*$fileResource = fopen($filePath, 'r') or die('I can\'t read file');
echo fgets($fileResource);
echo fgets($fileResource);
echo fgets($fileResource);
echo fgets($fileResource);
echo fgets($fileResource);
echo fgets($fileResource);
echo fgets($fileResource);
var_dump(fgets($fileResource));
fclose($fileResource);*/

/*$fileResource = fopen($filePath, 'r');
$i = 1;

while (!feof($fileResource)) {
    echo $i . ': ' . fgets($fileResource);
    $i++;
}

fclose($fileResource);*/

/*$fileResource = fopen($filePath, 'r');
echo fgetc($fileResource);
echo fgetc($fileResource);
echo fgetc($fileResource);
echo fgetc($fileResource);
fclose($fileResource);*/

/*$fileResource = fopen($filePath, 'r');

while (!feof($fileResource)) {
    echo '-' . fgetc($fileResource);
}

fclose($fileResource);*/


/*$fileResource = fopen('files/numbers.txt', 'r');

while (!feof($fileResource)) {
    $number = (int) fgets($fileResource);
    echo calculate($number) . PHP_EOL;
}

fclose($fileResource);

function calculate(int $number): int
{
    return $number * $number;
}*/


/*$fileResource = fopen($filePath, 'w');

fwrite($fileResource, 'Nauji duomenis 3' . PHP_EOL);
fwrite($fileResource, 'Nauji duomenis 4' . PHP_EOL);
fwrite($fileResource, 'Nauji duomenis 5' . PHP_EOL);

fclose($fileResource);*/

/*$fileResource = fopen($filePath, 'a');

fwrite($fileResource, 'Nauji duomenis 3' . PHP_EOL);
fwrite($fileResource, 'Nauji duomenis 4' . PHP_EOL);
fwrite($fileResource, 'Nauji duomenis 5' . PHP_EOL);

fclose($fileResource);*/

//echo file_get_contents($filePath);
//echo file_get_contents('files/text.txt', false, null, 10, 15);

//var_dump(file_put_contents('files/text.txt', 'Data 4' . PHP_EOL, FILE_APPEND | LOCK_EX));
