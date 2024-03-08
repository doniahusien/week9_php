<?php
function one(){
    return "One from Function <br>";
}
echo one();
$func1 = "one";//variable function
echo $func1();


function say_hello_to($someone)
{
    echo "Hello $someone <br>";
}
$func2 = "say_hello_to";
echo $func2("haneen");

function test (){
    return "test from function";
}
if(function_exists("test")){
    echo test();
}else{
    echo "not found";
}

echo strlen(("hello"));

$func3 = "strlen";
echo $func3("hello");