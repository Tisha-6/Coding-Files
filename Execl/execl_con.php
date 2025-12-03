<?php
$input  = "file.xlsx";      // Your Excel file
$output = "output.pdf";     // PDF you want to create

$command = 'soffice --headless --convert-to pdf "'.$input.'" --outdir .';

exec($command);







echo "Converted to PDF successfully!";
?>
