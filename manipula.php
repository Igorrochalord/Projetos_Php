<?php
$file = fopen("exemplo.txt", "r") or die("Não foi possível abrir o arquivo!");
echo fread($file, filesize("exemplo.txt"));
fclose($file);
?>
