<?php
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="bass.pdf"');
readfile('boot.pdf');
?>	