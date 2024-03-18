<?php
//assign 1
$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
];

echo "<pre>";
print_r(array_chunk( $friends,2,true));
echo "<pre>";

//assign 2
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];
echo "<pre>";
print_r(array_change_key_case(array_combine($codes,$means)));
echo "</pre>";


//assign 3
$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
];  
echo "<pre>";
print_r(array_change_key_case(array_flip($friends)));
echo "</pre>";


//assign 4
$nums = [10, 20, 30];
echo array_sum($nums) . "<br>";
echo array_reduce($nums,fn($n1,$n2)=> $n1 + $n2)."<br>";


//assign 5
$nums = [5, 10, 20, 5, 30, 40];

echo array_reduce(array_filter($nums, fn($n) => $n !=5),fn($n1,$n2)=> $n1 + $n2);



//assign 6
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;
echo "<pre>";
print_r(array_pad($chars,count(str_split($char))*count($chars),$char[$zero]));
echo "</pre>";
