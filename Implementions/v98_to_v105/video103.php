<?php
//session_id("8565ffwe");
session_start();

//echo session_id()."<br>";

//$_SESSION['name'] = "donia";

isset($_SESSION["views"])? $_SESSION["views"]++ : $_SESSION["views"]=1;
echo "hello " . $_SESSION['name'] . " views count is " . $_SESSION["views"];


echo '<a href="about.php">About</a>';