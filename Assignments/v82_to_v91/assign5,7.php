<?php
//asign 5
echo basename(__FILE__) . "<br>";

echo pathinfo(__FILE__)["basename"] . "<br>";

echo pathinfo(__FILE__, PATHINFO_BASENAME) . "<br>";

echo basename($_SERVER['SCRIPT_NAME']) . "<br>";


//assign 6

/*
$file = fopen("elzero.txt", "r");
echo fread($file, 24) . "<br>";

rewind($file);

for ($i = 0; $i < 2; $i++) {
echo fgets($file);
}

echo "<br>";
rewind($file);
echo stream_get_contents($file,24) . "<br>";

rewind($file);
echo implode(" ", array_slice(file("elzero.txt"), 0, 2));

echo fclose($file);
*/


//assign 7
$file = fopen("elzero.txt", "r+");
fseek($file,6);
fwrite( $file,"Elzero");
echo fclose($file);
