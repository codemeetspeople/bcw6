<?php
    $arr = array();

    $arr["username"] = "caiman";
    $arr["role"] = "admin";
    $arr["password"] = "qwerty";

    foreach ( $arr as $key => $value ) {
        echo "key: $key, value: $value" . PHP_EOL;
    }

    $value = "Whatever...";

    print_r($arr);
?>