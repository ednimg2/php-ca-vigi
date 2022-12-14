<?php

//$filePath = 'storage/www/637cfb2350042_Moduliai.jpg';

if (isset($_GET['path']) && $_GET['path'] !== '') {
    $filePath = $_GET['path'];

    if (file_exists($filePath)) {
        $fileName = basename($filePath);
        $fileSize = filesize($filePath);

        // Output headers.
        header("Cache-Control: private");
        header("Content-Type: application/stream");
        header("Content-Length: ".$fileSize);
        header("Content-Disposition: attachment; filename=" . $fileName);

        // Output file.
        readfile($filePath);
        exit();
    } else {
        die('The provided file path is not valid.');
    }
} else {
    die('The query params path is not provided.');
}