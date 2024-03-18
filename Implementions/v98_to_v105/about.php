<?php
session_start();

//isset($_SESSION["views"])? $_SESSION["views"]++ : $_SESSION["views"]=1;
echo "hello " . $_SESSION['name'] . " views count is " . $_SESSION["views"];

echo '<a href="about.php">About</a>';