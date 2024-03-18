<?php
//assign  4
function multiply(...$args):int{
    $res = 1;
    foreach ($args as $arg) {
        if(is_string($arg)){
            continue;
        }
        $res *=(int)$arg;
    }
    
    return $res;
}
echo multiply(10, 20)."<br>";
echo multiply("A", 10, 30)."<br>"; // 300
echo multiply(100.5, 10, "B")."<br>"; // 1000


//assign 5
function check_status($a, $b, $c) {
    $name = "";
    $age = 0;
    $status = "";

    foreach ([$a, $b, $c] as $arg) {
        if (is_string($arg)) {
            $name = $arg;
        } elseif (is_int($arg)) {
            $age = $arg;
        } elseif (is_bool($arg)) {
            $status = $arg;
        }
    }
    $availability = $status ? "You Are Available For Hire" : "You Are Not Available For Hire";
    return "Hello $name, Your Age Is $age, $availability";
}

// Needed Output
echo check_status("Osama", 38, true) . "<br>"; // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true) . "<br>"; // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama") . "<br>"; // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38) . "<br>"; // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"


//assign 6
function calculate($num1,$num2,$op=""){
    switch ($op) {
        case '':
        case '+':
        case 'a':
        case 'add':
            return $num1 + $num2;
            break;

        case 'subtract':
        case 's':
            return $num1 - $num2;
            break;

        case 'multiply':
        case 'm':
            return $num1 * $num2;
            break;
        default:
            return "unknow operation";
            break;
    }
}
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200