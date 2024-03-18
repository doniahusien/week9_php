<?php
echo gettype(8 + 6);
echo "<br>";
echo gettype(8.5 + 6);
echo "<br>";

echo gettype(8 - 6);
echo "<br>";
echo gettype(8.5 - 6);
echo "<br>";

echo gettype(8 * 6);
echo "<br>";
echo gettype(8.5 * 6);
echo "<br>";

echo 20 / 10;
echo "<br>";
echo gettype(20 / 10);
echo "<br>";
echo 20 / 3;
echo "<br>";
echo gettype(20 / 3);
echo "<br>";

echo 23 % 10;
echo "<br>";
echo gettype(23 % 10);
echo "<br>";

echo 2 ** 3;
echo "<br>";

echo +"5";
echo "<br>";
echo gettype(+"5");//integer
echo "<br>";

echo -"5";
echo "<br>";
echo gettype(-"5");//integer
echo "<br>";

echo -"-5";
echo "<br>";
echo gettype(-"-5");//integer