<?php
    function sum(int $x, int $y): int {
        return $x + $y;
    }

    function selectState(int $state) {
        if ( $state == 1 ) {
            echo "First state selected..." . PHP_EOL;
            return;
        }
        if ( $state == 2 ) {
            echo "Second state selected..." . PHP_EOL;
            return;
        }
        echo "Default state selected..." . PHP_EOL;
    }

    function multiply(...$numbers) {
        $result = $numbers[0];

        for ( $i = 1; $i < count($numbers); $i++ ) {
            $result *= $numbers[$i];
        }
        return $result;
    }

    function increment(int $value, int $increment = 1): int {
        return $value + $increment;
    }

    echo increment(10) . PHP_EOL;
?>