<?php
/*
echo $_POST["username"];
echo "<br>";
echo $_POST["lang"];
*/
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if ($_POST["lang"]=="ar"){
        header("Location: ar.php");
        exit();
    }
    else if ($_POST["lang"] == "en") {
        header("Location: en.php");
        exit();
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

    <form action="" method="post">
        <input type="text" name="usern" id="">
        <select name="lang" id="">
            <option value="ar">Arabic</option>
            <option value="en">English</option>
        </select>
        <input type="submit" value="submit">
    </form>
    
</body>
</html>