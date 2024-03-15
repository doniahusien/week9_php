<?php

$handle = fopen("file.txt", "r");
/*echo fgets( $handle );
echo ftell($handle);
echo fgets( $handle )."<br>";
echo fgets( $handle )."<br>";
echo ftell($handle) . "<br>";
rewind($handle);
echo ftell($handle) . "<br>";
*/

echo fgets( $handle )."<br>";
echo fseek( $handle,7 )."<br>";
echo fseek( $handle,30,SEEK_CUR )."<br>";
echo fseek( $handle,-10,SEEK_END )."<br>";

echo fgets( $handle )."<br>";
echo ftell($handle) . "<br>";



fclose($handle);