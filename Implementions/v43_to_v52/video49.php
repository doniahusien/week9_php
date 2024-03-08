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
say_hello_to("Haneen");