<?php
$str = "welcome to to elzero web web web school website very_very_very_long";
echo wordwrap($str,8,"<br>",true);
echo "<br>";


echo ord("a")."<br>";
echo chr(98)."<br>";

echo similar_text("Elz_ero","Elz_eroo")."<br>";//7
echo similar_text("Elz@ero","Elz_eroo")."<br>";//6
echo similar_text("Elz@ero","Elz_eroo",$perc)."<br>";//6
echo $perc;