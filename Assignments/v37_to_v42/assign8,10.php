<?php
//assign 8
$nums = [1, 13, 12, 20, 51, 17, 30];
for ($i = 0; $i < count($nums); $i++) {
    if($nums[$i]%2==0){
        echo ($nums[$i] / 2)."<br>";
    }
}

//assign 9
$help_num = 3;
$help_num++;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

for ($i = 0; $i < count($names);$i++){
    if($nums[$i]<=$help_num){
        continue;
    }else{
        echo $names[$i]."<br>";
    }
}

//assign 10
$help_num = 4;
$nums = [2, 4, 5, 6, 10];

$help_num++;
foreach ($nums as $index) {
    echo "$index + " . $nums[--$help_num] . ' = ' . $index + $nums[$help_num]."<br>";

}