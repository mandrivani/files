<?php
$filename="config.php";
$line_counter = 0;


$fh = fopen($filename,'r') or die($php_errormsg);
while ((! feof($fh)) && ($line_counter <= $desired_line)) {
    if ($s = fgets($fh,1048576)) {
        $line_counter++;
    }
}
fclose($fh) or die($php_errormsg);

$t = trim(substr($s, strpos($s, "=") + 1));

?>