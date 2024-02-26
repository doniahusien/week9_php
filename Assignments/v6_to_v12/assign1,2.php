<?php

//assign 1
echo (int)15.2 + (int)14.7 +(int) (10.5 + 10.5); // 50
echo gettype( (int)15.2 + (int)14.7 +(int) (10.5 + 10.5)); // Integer

//assign 2
echo gettype(100);
var_dump(100);
//cannot directly use echo within a ternary conditional 
is_int(100) ? print "Integer" : null;
