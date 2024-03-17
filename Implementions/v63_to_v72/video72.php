<?php
function add($carry, $item){
    echo $carry . "<br>";
    echo $item . "<br>";
    echo $carry + $item . "<br>";
    echo "********<br>";
    return $carry + $item;

}
$nums = [10, 50, 70, 10];
echo array_reduce($nums, "add");
echo "<br>";
//echo array_reduce($nums, "add",100);
