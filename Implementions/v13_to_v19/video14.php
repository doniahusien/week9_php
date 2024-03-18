<?php $user = "Sohir"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page | <?=$user?></title>
</head>

<body>
    <div>Welcome <?=$user?></div>
    <div> <?=$user?>,You scored 8000 Points</div>
    <div>
        <?php include("score.php")?>
    </div>
</body>
</html>