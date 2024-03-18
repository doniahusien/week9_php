<?php
if (8 > 6) echo "Good";
else echo "bad";

echo "<br>";
?>
<?php if (8 > 6) : ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello
</body>
</html>
<?php endif; ?>


<?php 
if(10>10): 
    echo "first";
elseif(10> 5): 
    echo "second";
else:
    echo "last";
endif;
?>