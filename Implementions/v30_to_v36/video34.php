<?php

$name = "Ali";
$is_student = true;
$is_orphan=true;
$country = "Egypt";
$country_discount = 50;
$price = 100;
$student_discount = 10;
$orphan_discount = 15;

if($country=="Egypt"){
    if($is_student==true){
        if($is_orphan == true){
            echo "Hello $name";
            echo "<br>";
            echo "country discount $country_discount";
            echo "<br>";
            echo "student discount $student_discount";
            echo "<br>";
            echo "orphan discount $orphan_discount";
            echo "<br>";
            echo "The final price is ".$price - $country_discount - $student_discount - $orphan_discount;        
        }
        else{
            echo "Hello $name";
            echo "<br>";
            echo "country discount $country_discount";
            echo "<br>";
            echo "student discount $student_discount";
            echo "<br>";
            echo "The final price is ".$price - $country_discount-$student_discount;        
        }
    }
    else{
        echo "Hello $name";
        echo "<br>";
        echo "country discount $country_discount";
        echo "<br>";
        echo "The final price is ".$price - $country_discount;        
    }

}
else{
    echo "Hello $name";
    echo "<br>";
    echo "No discount";
    echo "<br>";
    echo "The final price is $price";
}