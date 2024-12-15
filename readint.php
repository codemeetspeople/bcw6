<?php
    function readInt() {
        $in = fgets(STDIN);
        return intval(rtrim($in));
    }
?>