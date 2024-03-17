<?php
function getData($name,$country="Private",...$skills){
    echo "Hello $name and your country is $country <br> ";
    foreach ($skills as $skill) {
        echo "**".$skill."<br>";
    }
}
<<<<<<< HEAD
=======

>>>>>>> 22e9bc66c8af19557c74cd900c288fe56f152f98
getData("Ali","Egypt","HTML","CSS");