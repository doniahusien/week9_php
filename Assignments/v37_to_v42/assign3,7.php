<?php

//assign 3
$num = 2;

echo --$num;
echo '<br>';

while ($num < 520) {
  echo $num = $num * 2 + 2;
  echo '<br>';
  if ($num >= 382) {
    break;
  }
}


//assign 4
$start = 10;
$end = 0;
$stop = 3;
for ($i = $start; $i >= $end; $i--) {
    if ($i < 10) {
        echo "0$i<br>";
    } else {
        echo "$i<br>";
    }
    if ($i == $stop) {
        break;
    }
}

//assign 5
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];
for ($i=$start; $i <count($mix) ; $i++) { 

    if($mix[$i]==$mix[$start] || is_string($mix[$i])){
        continue;
    }
    echo $mix[$i]."<br>";
}

//assign 6

$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
foreach ($money as $name => $money) {
    echo "The Name Is $name And I Need $money Pound From Him<br>";
}

//assign 7
$mix = [1, 2, "A", "B", "C", 3, 4];
$letter = 0;
$digit=0;
for ($i = 0; $i < count($mix);$i++){
    if(is_numeric($mix[$i])){
        $digit++;
        echo $mix[$i]."<br>";
    }else{
        $letter++;
    }
}
echo "$digit Numbers Printed<br>";
echo "$letter Letters Printed";