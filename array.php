<?php
    // function arrayPrint($a) {
    //     $result = "";
    //     $last = count($a) - 1;

    //     for ( $i = 0; $i < $last; $i++ ) {
    //         $result .= $a[$i] . " ";
    //     }
    //     $result .= $a[$last] . PHP_EOL;

    //     echo $result;
    // }

    $arr = array();
    for ( $i = 0; $i < 10; $i++ ) {
        $arr[$i] = ($i + 1) * 10;
    }

    // arrayPrint($arr);

    echo implode(' ', $arr) . PHP_EOL;

?>