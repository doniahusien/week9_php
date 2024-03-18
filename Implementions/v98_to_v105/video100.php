<?php
//setcookie("style", "light",time()+5); delete
setcookie("style[color]", "blue");
setcookie("style[size]", "22");
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

if (isset($_COOKIE["style"])) {
    echo $_COOKIE["style"]["color"];
}

