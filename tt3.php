<?php

$file = $_GET['file'] ?? 'sample-pdf-file.pdf';
if (!file_exists($file)) {
    exit('No file');
}

$fp = fopen($file, 'rb');
$out = fopen('php://output', 'w');

stream_copy_to_stream($fp, $out);

fclose($out);
fclose($fp);
