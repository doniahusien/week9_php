<?php

//echo file_get_contents("Test.txt",1,null,7,4)."<br>";
echo get_include_path() . "<br>";
echo file_get_contents("https://elzero.net");

print_r(file("https://elzero.net"));
echo file_put_contents("Test.txt", "\r\nThis Is New Line 3", FILE_APPEND);