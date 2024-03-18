<?php
//assign 6
$genre = "Hack And Slash";

switch ($genre) {
    case "RPG":
        echo "I Recommend Ys Games";
        break;
    case "Hack And Slash":
        echo "I Recommend Castlevania Games";
        break;
    case "FPS":
        echo "I Recommend Uncharted Games";
        break;
    case "Platform":
        echo "I Recommend Megaman Games";
        break;
    case "Puzzle":
        echo "I Recommend Megaman Games";
        break;

    default:
        echo "I Recommend Shadow Of Mordor And Shadow Of War";
        break;
}

//assign 7
$num_one = 23;
$num_two = 5;
$op = "/";
switch ($op) {
    case "+":
        echo $num_one + $num_two;
        break;
    case "-":
        echo $num_one - $num_two;
        break;
    case "*":
        echo $num_one * $num_two;
        break;
    case "/":
        echo (int)($num_one / $num_two);
        echo "<br>";
        echo $num_one % $num_two;
        break;
    default:
        echo "Unknown Operation";
}

//assign 8
$day = "Sat";

if ($day == "Sat" || $day == "Sun" || $day == "Mon") {
    echo "We Are Open All The Day";
} elseif ($day == "Tue" || $day == "Wed") {
    echo "We Are Open From 08:12";
} elseif ($day == "Thu" || $day == "Fri") {
    echo "We Are Closed";
} else {
    echo "Unknown Day";
}

