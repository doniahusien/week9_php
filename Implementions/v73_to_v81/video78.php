<?php

$bool = "x";
var_dump(filter_var($bool,FILTER_VALIDATE_BOOL,FILTER_NULL_ON_FAILURE) );
echo "<br>";

$url = "https://elzero.org";
var_dump(filter_var($url,FILTER_VALIDATE_URL) );

$url = "https://elzero.org/";
var_dump(filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED) );


$url = "https://elzero.org/?id=1";
var_dump(filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED) );


echo "<br>";
$url = "https://elzero.org/";
var_dump(filter_var($url,FILTER_VALIDATE_URL,
["flsgs"=>FILTER_FLAG_PATH_REQUIRED |FILTER_FLAG_QUERY_REQUIRED |FILTER_NULL_ON_FAILURE]) );

echo "<br>";
$ip = "192.168.1.0";
var_dump(filter_var($ip, FILTER_VALIDATE_IP));

$ip = "2001:0db8:85a3:0000:0000:8a2e:0370:7334";
var_dump(filter_var($ip, FILTER_VALIDATE_IP,FILTER_FLAG_IPV4));

$mac= "2c-54-91-88-c9-e3";
var_dump(filter_var($mac, FILTER_VALIDATE_MAC));