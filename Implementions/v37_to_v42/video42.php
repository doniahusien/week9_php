<?php

//include("testx.php"); warning but print continue
include("test.php");
echo "$a<br>";
echo "Continue <br>";

$a = 20;
include("test.php");
echo "$a<br>"; //10
echo "Continue <br><br>";

$a = 50;
include_once("test.php");
echo "$a<br>"; //50
echo "Continue <br>";

//require("test.php"); like die
require("test.php");
echo "$a<br>";
echo "Continue";