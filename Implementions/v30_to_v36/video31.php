<?php
$p = "Home";
if($p == "About"){
    echo "This is the page";
}
echo "<br>";

$title = "Home";

if($title == ""){
    echo "unknown";
}else{
    echo $title;
}
echo "<br>";

$lang = "Arabic";

if($lang == "Arabic"){
    echo "مرحبا";
}else if ($lang == "English"){
    echo "Hello";
}
else if ($lang == "spanish"){
    echo "Hola";
}else{
    echo "unknown lang";
}