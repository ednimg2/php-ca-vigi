<?php
    include 'config.php';
?>
<html>
<head>
    <style>
        body {
            margin:10px;
            padding: 10px;
        }

        form input, form button {
            margin: 3px;
        }
    </style>
</head>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="filename"><br>
    <input type="file" name="my_file"><br>
    <button type="submit">Upload</button>
</form>

<?php
    function printFileList(): void
    {
        $fileResource = fopen(MY_DB_FILE, 'r');

        while (!feof($fileResource)) {
            $fileData = fgets($fileResource);
            if ($fileData) {
                /*echo sprintf(
                    '<li>%s <a href="%s" target="_blank">Preview</a> | <a href="download.php?path=%s">Download</a></li>',
                    $fileData,
                    $fileData,
                    $fileData
                );*/

                echo '<li>';
                echo $fileData . ' <a href="' . $fileData . '" target="_blank">Preview</a> | <a href="download.php?path=' . $fileData . '">Download</a>';
                echo '<form action="download2.php" method="POST">';
                echo '<input type="hidden" name="path" value="'. trim($fileData) .'">';
                echo '<button type="submit">Download</button>';
                echo '</form>';
                echo '</li>';
            }
        }

        fclose($fileResource);
    }
?>

<fieldset>
    <legend>My files</legend>
    <ul>
    <?php printFileList(); ?>
    </ul>
</fieldset>

<!--<div>
    <a href="storage/www/637cfb2350042_Moduliai.jpg" target="_blank" >File</a>
    <a href="download.php">Download file</a>
</div>-->

<ul>
    <li>1. Susikurti forma, kuri priimtu faila</li>
    <li>2. Apdoroti/issaugoti faila (uploads.php)</li>
    <li>3. Parsisiusti faila i kompiuteri</li>
    <li>4. Isveskite isaugotu failu lista</li>
</ul>
</body>
</html>
