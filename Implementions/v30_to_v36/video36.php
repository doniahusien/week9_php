<?php

$day = "sat";
switch ($day) {
    case 'sat':
        echo "Hello today is $day open from 10:00";
        break;
    case 'sun':
        echo "Hello today is $day open from 12:00";
        break;
    case 'Thu':
    case 'mon':
        echo "Hello today is $day open from 2:00";
        break;
    default:
        echo "unknown";
        break;
}