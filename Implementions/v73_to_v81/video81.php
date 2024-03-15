<?php
//echo $_GET["num"];
echo filter_input(INPUT_GET, "num",FILTER_VALIDATE_INT);
?>

<form action="" method="GET">
    <input type="text" name="num" id="">
    <input type="submit" value="Send">
</form>