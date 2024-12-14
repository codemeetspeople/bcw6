<?php
    $a = 10;
    $b = 55.5;
    $c = "Some string";
    $d = true;
    $e = false;
    $f = NULL;

    echo $a . PHP_EOL;
    echo $b . PHP_EOL;
    echo $c . PHP_EOL;
    echo $d . PHP_EOL;
    echo intval($e) . PHP_EOL;
    echo intval($f) . PHP_EOL;

    if ( is_null($f) ) {
        echo "yep, it's NULL..." . PHP_EOL;
    } else {
        echo "nope, it's something else..." . PHP_EOL;
    }
?>