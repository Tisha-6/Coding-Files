<?php

if (!isset($_FILES['htmlfile'])) {
    die("No file uploaded.");
}

$file = $_FILES['htmlfile'];
$filename = $file['tmp_name'];
$contents = file_get_contents($filename);

// Use Dompdf
require_once __DIR__ . "/vendor/autoload.php";
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->loadHtml($contents);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

$dompdf->stream("converted.pdf", ["Attachment" => true]);
?>
