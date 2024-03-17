<?php
function sumNum(){
    echo func_num_args()."<br>";//number of args 2
    echo func_get_arg(2)."<br>";
    print_r(func_get_args());
    $result=0;
    foreach (func_get_args() as $arg) {
        $result += $arg;
        
    }
    echo $result."<br>";
}
sumNum(8, 8, 7, 3, 4);

function calc(...$nums){
    $sum=0;
    foreach (func_get_args() as $arg) {
        $sum += $arg;
    }
    echo $sum."<br>";
}
calc(1,2,4,5);
calc(1,2,5);