<?php
$a = array(1,2,7,3,4,5,6,3,4,5,5,7);
$b = array_unique($a);
sort($b);
$string = join(',', $b);
echo $string;
?>
