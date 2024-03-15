<?php

echo "<pre>";
echo print_r(filter_list()) . "<br>";
echo "</pre>";

echo filter_id("boolean"). "<br>";//258

//TRUE ON YES 1
$val = True;
if (filter_var($val,FILTER_VALIDATE_BOOL)){
    echo "TRUE";
}
else{
    echo "false";
}

if (filter_var($val,258)){
    echo "TRUE";
}
else{
    echo "false";
}