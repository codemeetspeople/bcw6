<?php
    $arr = array();

    $arr[0] = 10;
    $arr[1] = 20;
    $arr[2] = 30;
    $arr[3] = 40;
    $arr[4] = 50;

    print_r($arr);

    foreach ( $arr as &$value ) {
        $value *= $value;
    }
    unset($value); // MUST!!!!!

    print_r($arr);

    $value = "Ololo, trololo!";

    print_r($arr);


?>