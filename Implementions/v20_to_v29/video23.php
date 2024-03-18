<?php
var_dump(8 > 6);
echo "<br>";
var_dump(6 > 6);
echo "<br>";
var_dump(8 >= 6);
echo "<br>";
var_dump(8 < 6);
echo "<br>";
var_dump(8 <= 6);
echo "<br>";

//greater return 0
var_dump(60 <=> 80);//less return -1
echo "<br>";
var_dump(60 <=> 60); //equal return 0
echo "<br>";
var_dump(80 <=> 60);//greater return 1