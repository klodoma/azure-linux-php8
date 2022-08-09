<?php

$file = $_GET['file'] ?? 'sample-pdf-file.pdf';
if (!file_exists($file)) {
    exit('No file');
}

$fp = fopen($file, 'rb');
fpassthru($fp);
fclose($fp);
