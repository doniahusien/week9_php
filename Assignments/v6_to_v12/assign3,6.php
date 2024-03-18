<?php
echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"$\$PHP\"";

echo"<br>";

//assign 4
echo nl2br("We 
Love 
Elzero 
Web 
School");

echo"<br>";

//assign 5
echo nl2br(<<<'txt'
Hello "'Elzero'"
We Love $Programming$
Language specially "PHP"
txt);

echo "<br>";
//assign 6
$something = "Programming";

echo <<<"code"
Hello \PHP\
We Love $something
code;// [1] Fix The Error

// [2] Remove 2 Characters To Get The Output
// Needed Output
//Hello \PHP\ We Love Programming