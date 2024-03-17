<?php
$prizes = ["PC", "XBOX", "TV", "Laptop", "ipad", "Playstation"];
function get_num($one, $two){
    echo $one + $two;
}


/*
get_num(2,5);
$prize_num = get_num(2,5);
var_dump($prize_num);Null
*/
function get_nums($one, $two){
    return $one + $two;
}
$prize_num = get_nums(2,5);
var_dump($prize_num);
echo $prizes[get_nums(2, 1)];