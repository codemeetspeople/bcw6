<?php
    // include("readint.php");
    // include_once("readint.php");
    // include_once("not_exists.php");
    // require("readint.php");
    require_once("readint.php");
    // require_once("not_exists.php");

    $in = readInt();

    switch ($in) {
        case 1:
            echo "First case" . PHP_EOL;
            break;
        case 2:
            echo "Second case" . PHP_EOL;
            break;
        case 3:
            echo "Third case" . PHP_EOL;
            break;
        default:
            echo "Default case" . PHP_EOL;
            break;
    }

    // if ( $in == 1 ) {
    //     echo "First case" . PHP_EOL;
    // } else if ( $in == 2 ) {
    //     echo "Second case" . PHP_EOL;
    // } else if ( $in == 3 ) {
    //     echo "Third case" . PHP_EOL;
    // } else {
    //     echo "Default case" . PHP_EOL;
    // }

?>