<?php
echo basename(__FILE__) . "<br>";
echo basename(__FILE__,".php") . "<br>";

echo dirname(__FILE__,2) . "<br>";

echo realpath(__FILE__) . "<br>";


echo "<pre>";
print_r(pathinfo(__FILE__) );
echo "</pre>";

echo pathinfo(__FILE__)["extension"]."<br>";
echo pathinfo(__FILE__,PATHINFO_DIRNAME)."<br>";
