<?php
echo "<pre>";
print_r($_SERVER);
echo $_SERVER["HTTP_HOST"];
echo "</pre>";

echo $_POST["user"];
?>

<form action="" method="post">
    <input type="text" name="user">
    <input type="submit" value="send">
</form>