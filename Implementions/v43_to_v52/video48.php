<?php
function getData($name,$country="Private",...$skills){
    echo "Hello $name and your country is $country <br> ";
    foreach ($skills as $skill) {
        echo "**".$skill."<br>";
    }
}
getData("Ali","Egypt","HTML","CSS");