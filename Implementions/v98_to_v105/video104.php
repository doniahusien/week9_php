<?php
session_start();
//$_SESSION['name'] = "donia";

//session_destroy();
//session_unset();/

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST['user'] === "Donia") {
        $_SESSION['username'] = "donia";
        $_SESSION['id'] = 1000;
    }
}

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

if(isset($_SESSION['username'])){
    echo "Welcome " . $_SESSION['username'];
}else{

?>

<form action="" method="POST">
    <input type="text" name="user" id="">
    <input type="submit" value="submit">
</form>

<?php } ?>

<a href="logout.php">Logout</a>