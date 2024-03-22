<?php

//assign 1
setcookie("site[layout]", "boxed", strtotime("+2 month +5 days"),'/');
setcookie("site[font]", "Swat", strtotime("+2 month +5 days"),'/');
setcookie("site[color]", "blue", strtotime("+2 month +5 days"),'/');


//assign 2
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
echo "Your color is " . $_COOKIE["site"]["color"] . " and your font is " . $_COOKIE["site"]["font"];


//assign 3
setcookie("site[layout]", "boxed",time()-5,'/');

//assign 4

setcookie("site[font]", "Swat",0,'/');
setcookie("site[color]", "blue", 0,'/');
