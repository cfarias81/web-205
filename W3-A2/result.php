<?php

$myfile = fopen("teste.txt", "w") or die("Unable to open file!");
$text= $_POST['text'];
fwrite($myfile, $text);
fclose($myfile);

?>