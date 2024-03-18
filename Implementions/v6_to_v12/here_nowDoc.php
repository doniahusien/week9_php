<?php
$age = 20;

//escape and parsing
echo <<<"Here"
Hello PHP
special chars $$$ ''' """"" \\\\
$age
Here;

echo "<br>";
//escape without parsing
echo <<<'Now'
Hello PHP
special chars $$$ ''' """"" \\\\
$age 
Now;

echo "<br>";

echo "<ul>";
    echo "<li>".$age."</li>";
    echo "<li>".$age."</li>";
    echo "<li>".$age."</li>";
echo "</ul>";

echo <<<"links"
    <ul>
        <li>$age</li>
        <li>$age</li>
        <li>$age</li>
    </ul>
    links;
