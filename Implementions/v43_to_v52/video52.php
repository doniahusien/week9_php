<?php
$say_hello = fn ($someone)=> "Hello $someone <br>";

echo $say_hello("Hanin");


$say_hola = fn ($someone)=>"Hola $someone <br>";
echo $say_hola("Hanin");


$msg = "Hi";
$say_hi = fn($someone)=>"$msg $someone";
echo $say_hi("Sohir");