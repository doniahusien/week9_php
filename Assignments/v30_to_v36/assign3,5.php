<?php

//assign 3
$admins = ["Osama", "Ahmed", "Sayed"];

// Input Name "Osama"

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $uname = $_POST['user'];
    echo "The Request Method Is Post And Username Is $uname" . '<br>';
    foreach ($admins as $admin => $name) {
        if ($uname == $name) {
            echo "This Username $name Is Admin";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="user">
        <input type="submit" value="Send">
    </form>
</body>

</html>


<?php
//assign 4
$a = 30;
$b = 40;
$c = 10;

echo ($a + $b === $c) ? "A + B = C" : (($a + $c === $b) ? "A + C = B" : (($b + $c === $a) ? "B + C = A" : "The End"));


//assign 5
$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18 && gettype($name) === "string" &&$country === "Egypt") {
    echo "The Age Is Good To Go";
    echo "The Name Is Good To Go";
    echo "The Country Is Good To Go";
}