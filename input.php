<?php
    function readInt() {
        return intval(rtrim(fgets(STDIN)));
    }

    $x = readInt();
    $y = readInt();

    echo $x . " + " . $y . " = " . $x + $y . PHP_EOL;
    echo $x . " - " . $y . " = " . $x - $y . PHP_EOL;
    echo $x . " * " . $y . " = " . $x * $y . PHP_EOL;
    echo $x . " / " . $y . " = " . $x / $y . PHP_EOL;
    echo $x . " % " . $y . " = " . $x % $y . PHP_EOL;

    echo $x . " == " . $y . " is " . intval($x == $y) . PHP_EOL;
    echo $x . " != " . $y . " is " . intval($x != $y) . PHP_EOL;
    echo $x . " > " . $y . " is " . intval($x > $y) . PHP_EOL;
    echo $x . " >= " . $y . " is " . intval($x >= $y) . PHP_EOL;
    echo $x . " < " . $y . " is " . intval($x < $y) . PHP_EOL;
    echo $x . " <= " . $y . " is " . intval($x <= $y) . PHP_EOL;
?>
