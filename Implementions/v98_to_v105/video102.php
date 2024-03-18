<?php
session_start();
$_SESSION['name'] = "donia";
$_SESSION['id'] = 86;

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo '<a href="test.php">Test</a>';