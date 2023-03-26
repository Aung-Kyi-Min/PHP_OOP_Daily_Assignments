<?php
//for loop
for ($a = 1; $a <= 5; $a++) {
    for ($j = 1; $j <= 5; $j++) {
        //$n = 2*($a+$j)-3;
        echo $n;
    }
    echo "\n";
}

//forEach loop
$array = ['a', 'b', 'c', 'd'];
foreach ($array as $x) {
    echo "<br>" . $x . "<br>";
}

//while

$x = 1;

while ($x <= 2) {
    echo "While Loop: $x <br>";
    $x++;
}

//do_while

$b = 0;
do {
    echo "Do_while Loop.. <br>";
    $b++;
} while ($b <= 3);

//switch

$name = "Leo Messi";
switch ($name) {
    case "Ronaldinho":
        echo "Best MidFielder Ever";
        break;
    case "Ronaldo":
        echo "Best Striker Ever";
        break;
    case "Leo Messi":
        echo "World Best Player Ever, Goatttt";
        break;
    default:
        echo "All Ballond'or Winners";

}

//continous
for ($x = 0; $x < 6; $x++) {
    if ($x == 2) {
        continue;
    }
    echo "The number is: $x <br>";
}
