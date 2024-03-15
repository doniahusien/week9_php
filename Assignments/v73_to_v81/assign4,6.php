<?php
//assign 4

$filterArray = [];
foreach (filter_list() as $filter) {
    $id = filter_id($filter); 
    $filterArray[$id]= $filter;
}
echo "<pre>";
print_r($filterArray);
echo "</pre>";


//assign 5
$url1 = "http://www.elz ero.org";
checkValid($url1);
$url2 = "http://¥elzero.org";
checkValid($url2);
$url3 = "https://elzero.org";
checkValid($url3);
$url4 = "https://elzero.o¥rg";
checkValid($url4);

function checkValid($url){
echo (filter_var($url,FILTER_VALIDATE_URL)? "A Valid URL" : "Not A Valid URL" ). "<br>";
}


//assign 6
$url1 = "http://www.elz ero.org";
validURL($url1);
$url2 = "http://¥elzero.org";
validURL($url2);
$url3 = "https://elzero.org";
validURL($url3);
$url4 = "https://elzero.o¥rg";
validURL($url4);

function validURL($url){
    echo filter_var($url, FILTER_SANITIZE_URL)."<br>";
}
/*
http://www.elzero.org
http://elzero.org
https://elzero.org
https://elzero.org
*/