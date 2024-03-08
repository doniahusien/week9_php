<?php
//assign 1
function greeting($name,$gender=""){
    if ($gender == "Male") {
        echo "Hello Mr $name";
    } else if ($gender == "Female") {
        echo "Hello Miss $name";
    }else{
        echo "Hello $name";
    }
}
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh


//assign 2
function  get_arguments(...$args){
    $all="";
    foreach ($args as $arg) {
        $all.=" ".$arg;
    }
    return $all;
}
echo "<br>";

echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP");
function  get_argument(){
    $all = implode(' ',func_get_args())."";
    return $all;
}

echo get_argument("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_argument("I", "Love", "PHP");

//assign 3
function sum_all(...$args){
    $res = 0;
    foreach ($args as $arg) {
        if($arg==5){
            continue;
        }else if($arg == 10){
            $arg = 20;
        }
        $res+= $arg;
    }
    return $res;
}

// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40