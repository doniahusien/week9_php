<?php
echo str_replace("@", "o", "elzer@ web sch@@l")."<br>";

str_replace("@", "o", "elzer@ web sch@@l",$r)."<br>";
echo "Replaces count is $r <br>";

echo str_replace(["@", "#"], ["o", "l"], "e#zer@ web sch@@#", $r);

echo "<pre>";
print_r(str_replace("one", "1", ["one","two","one","three","one"]));
print_r(str_replace(["one","two"], ["1","2"], ["one","two","one","three","one"]));
print_r(str_replace(["one","two","three"], ["1","2"], ["one","two","one","three","one"]));
echo "</pre>";

echo "<pre>";
print_r(str_ireplace("One", "1", ["one","two","one","three","one"]));
print_r(str_replace("One", "1", ["one","two","one","three","one"]));
echo "</pre>";