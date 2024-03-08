<?php
function say_hello($one,$two){
    echo "Hello $one $two<br>";
}
say_hello("Sohir","Ahmed");

function deep_freezer($item){
    if($item === "water"){
        echo "Make ice <br>";
    }elseif ($item === "juice") {
        echo "Make it cold <br>";
    }elseif ($item==="fruits") {
        echo "Make it fresh <br>";
    }else{
        echo "unknown";
    }
}
deep_freezer("water");
deep_freezer("juice");
deep_freezer("fruits");
deep_freezer("wood");