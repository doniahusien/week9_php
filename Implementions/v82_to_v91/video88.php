<?php
echo '<pre>';
print_r(file("file.txt"));//file lines as array
echo '</pre>';


$handle = fopen("file.txt", "r");
/*
while (!feof($handle)) {
    echo fgets($handle) . "<br>";
}*/

for ($i = 0; $i < count(file("file.txt")); $i++) {
    echo "Line $i =>" . fgets($handle) . "<br>";
}
fclose($handle);