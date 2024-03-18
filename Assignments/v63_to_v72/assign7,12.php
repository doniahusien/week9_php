<?php 
//assign 7
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names);
next($names);

echo current($names) . "<br>"; // "Sayed"


end($names);

echo current($names) . "<br>"; // "Ali"

reset($names);

echo current($names) . "<br>"; // "Osama"

end($names);
prev($names);

echo current($names) . "<br>"; // "Mahmoud"


//assign 8
$chars = ["A", "B", "C"];
array_push($chars,"D");
echo "<pre>";
print_r($chars);
echo "</pre>";


$chars = ["A", "B", "C"];
$chars[count($chars)] = "D";
echo "<pre>";
print_r($chars);
echo "</pre>";


$chars = ["A", "B", "C"];
echo "<pre>";
print_r(array_merge($chars, ["D"]));
echo "</pre>";


$chars = ["A", "B", "C"];
echo "<pre>";
array_splice($chars, count($chars), 0, "D");
print_r($chars);
echo "</pre>";



//assign 9
$nums = [1, 2, 3, 4, 5, 6];
echo "<pre>";
print_r(array_slice($nums,-5,-2));
echo "</pre>";


//assign 10
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

echo "<pre>";
print_r(array_merge(array_slice($mix, 0, 3), $nums, array_slice($mix, 6)));
echo "</pre>";


//assign 11
$arr = ["A", "B", "C", "D", "E"];
$c = 0;
foreach ($arr as $element) {
    $c++;
}
echo $c."<br>";


//assign 12
$nums = [11, 2, 10, 7, 20, 50];
function sum(array $arr){
    $sum = 0;
    foreach ($arr as $element) {
        $sum += $element;
    }
    return $sum;
}
echo sum($nums);