<?php
$handel = fopen("file.txt", "a+");//write and read

//echo fread($handel,1024);
$handel = fopen("file.txt", "a+");

fwrite ($handel,"\r\nPHP");
fwrite($handel, "\r\n This is a new Line1", 5);
fwrite ($handel,"\r\n This is a new Line2");
fclose( $handel );