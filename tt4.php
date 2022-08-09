<?php

$file = $_GET['file'] ?? 'sample-pdf-file.pdf';
if (!file_exists($file)) {
    exit('No file');
}

$fp = fopen($file, 'rb');

while (!feof($fp)) {
    print(fread($fp, 8192));
}

fclose($fp);
