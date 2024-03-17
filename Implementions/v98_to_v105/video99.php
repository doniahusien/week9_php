<?php
 setcookie("style", "dark", time() + 60 * 60 * 24 * 30, "/");
setcookie("popup", "done", strtotime("+2 month"));
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

echo $_COOKIE["style"];