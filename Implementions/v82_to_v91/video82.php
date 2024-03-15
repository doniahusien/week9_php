<?php
echo disk_total_space("c:")/1024/1024/1024 . "<br>";
echo disk_free_space("c:")/1024/1024/1024 . "<br>";
var_dump(file_exists("x.txt"));

echo "<br>";

echo filesize("file.txt");