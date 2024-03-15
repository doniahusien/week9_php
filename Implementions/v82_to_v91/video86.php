<?php
$handel = fopen("file.txt", "r+");
//$handel = fopen("file.txt", "w");//clear file

$handel = fopen("file.txt", "r");
echo fgetc($handel);//h        char from file pointer
//echo fgets($handel,4);

echo fread($handel,1024);
fclose( $handel );