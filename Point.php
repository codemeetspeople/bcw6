<?php
    class Point {
        private int $x;
        private int $y;

        public function __construct(int $x = 0, int $y = 0) {
            $this->x = $x;
            $this->y = $y;
        }

        public function __toString(): string {
            return "($this->x, $this->y)";
        }

        // public function __set($name, $value) {
        //     if ( !property_exists($this, $name) ) {
        //         throw new Exception();
        //     }
        //     $this->$name = $value;
        // }

        public function getX(): int {
            return $this->x;
        }

        public function getY(): int {
            return $this->y;
        }

        public function setX(int $value) {
            $this->x = $value;
        }

        public function setY(int $value) {
            $this->y = $value;
        }

        public function isEqualTo(Point $other): bool {
            return $this->y == $other->y;
        }

        public function add(Point $other): Point {
            return new Point($this->x+$other->x, $this->y+$other->y);
        }

        public function increment(Point $other) {
            $this->x += $other->x;
            $this->y += $other->y;
        }
        
    }

    $a = new Point(2, 3);
    $b = new Point(1, 3);
    $c = clone $b;

    if ( $a->isEqualTo($b) ) {
        echo "$a is equal to $b by custom conditions..." . PHP_EOL;
    }


    if ( $a == $b ) {
        echo "$a is equal to $b" . PHP_EOL;
    } else {
        echo "$a is not equal to $b" . PHP_EOL;
    }

    if ( $b === $c ) {
        echo "$b and $c are the same object" . PHP_EOL;
    } else {
        echo "$b and $c are different objects" . PHP_EOL;
    }

?>