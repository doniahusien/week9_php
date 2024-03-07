<?php

foreach ( ['EG', "SA", "QA","USA"]as $country) :
    if($country=="QA"){
        break;
    }
    echo "$country <br>";
endforeach;


foreach ( ['EG', "SA", "QA","USA"]as $country) :
    if($country=="QA"){
        continue;
    }
    echo "$country <br>";
endforeach;
