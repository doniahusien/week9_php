<?php
echo substr_replace("OneTwo", 1, 0)."<br>";//1
echo substr_replace("OneTwo", 1, 3)."<br>";//One1
echo substr_replace("OneTwo", 1, -1)."<br>";//OneTw1
echo substr_replace("OneTwo", 1, -2)."<br>";//OneT1

echo substr_replace("OneTwo", 2, 2)."<br>";//On2
echo substr_replace("OneTwo", 2, 2,2)."<br>";//On2wo
echo substr_replace("OneTwo", 2, 1,4)."<br>";//O2O

echo substr_replace("Elzero_Web_School", "A", 7,3)."<br>";
echo substr_replace("Elzero_Web_School", "A", 7,-1)."<br>";//Elzero_Al
echo substr_replace("Elzero_Web_School", "A", 7,-2)."<br>";//Elzero_Aol
echo substr_replace("Elzero_Web_School", "A", 7,-9)."<br>";//Elzero_Aeb_School
echo substr_replace("Elzero_Web_School", "A", 7,-10)."<br>";//Elzero_AWeb_School


//insert not replace
echo substr_replace("Elzero_Web_School", "@", 1,0)."<br>";//E@lzero_Web_School

echo "<pre>";
print_r(substr_replace(["OneTwo","three"], 1, 0));//1
echo "</pre>";