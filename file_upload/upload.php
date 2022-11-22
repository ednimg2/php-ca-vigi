<?php
$error = $_FILES['my_file']['error'];

if ($error !== UPLOAD_ERR_OK) {
    echo 'File upload error!';
    die();
}

if (!is_dir('storage/www')) {
    mkdir('storage/www', 0777);
}

$fileName = $_FILES['my_file']['name'];
$fileTmpPath = $_FILES['my_file']['tmp_name'];
$fileStoragePath = sprintf('storage/www/%s', sprintf('%s_%s', uniqid(), $fileName));

move_uploaded_file($fileTmpPath, $fileStoragePath);

echo 'File uploaded successfully!';
