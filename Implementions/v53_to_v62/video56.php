<?php

echo chunk_split("Elzero Web School", 3, "/");
echo "<br>";

echo "<pre>";
print_r(str_split('Haneen'));
echo "</pre>";

echo "<pre>";
print_r(str_split('Haneen',2));
echo "</pre>";


echo "<h3> Hello <b> Elzero </b></h3> <br>";
echo strip_tags("<h3> Hello <b> Elzero </b></h3>");

echo strip_tags("<h3> Hello <b> Elzero </b></h3>","<h3>");

echo nl2br("Elzero\nWeb\nSchool",false);