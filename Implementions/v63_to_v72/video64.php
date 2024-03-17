<?php 
$family=["Yousef","Faris","Mahmoud","Abdelrahman",["Rodina","Heba"]];

echo "<pre>";
print_r(array_reverse($family));
print_r(array_reverse($family,true));
print_r($family);
echo "</pre>";



$countries = ["Eg" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];
echo "<pre>";
print_r(array_flip($countries));
echo "</pre>";


$counting = ["A", "B", "C", "D", [1, 2]];
echo count($counting)."<br>";//5
echo count($counting,1)."<br>";//7


$srch = [1, "2", 8, "6"];
if(in_array(2, $srch,true)){
    echo "IS FOUND <br>";
}


$countries = ["Eg" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];
if (array_key_exists("KSA",$countries)){
    echo "IS FOUND and full name is ".$countries["KSA"];
}