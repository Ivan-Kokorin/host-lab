<?php
$date = date("d-F-Y") . "\n";
$file = 'data-log.txt';
$open = fopen($file , 'a');
fwrite($open , $date);
fclose($open);
?>