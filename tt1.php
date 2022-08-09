<?php

$file = $_GET['file'] ?? 'sample-pdf-file.pdf';
if (!file_exists($file)) {
    exit('No file');
}

readfile($file);
