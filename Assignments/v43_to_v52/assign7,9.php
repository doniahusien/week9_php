<?php

//assign 7
function calculate(int $num_one, int $num_two):float {
    return $num_one + $num_two;
  }
  
  echo calculate(20, 10); // 30
  echo gettype(calculate(20, 10)); // Double



//assign 8
$message = "Hello";

$$message = fn($name) => $message ." ". $name;

echo $Hello("Osama"); // Hello Osama



//assign 9
$greet = function ($name) {
    return "Greetings";
};
$greet = fn($name) => "Greetings";

echo $greet("Osama"); // Greetings