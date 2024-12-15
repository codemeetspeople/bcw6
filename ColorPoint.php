<?php
    require_once 'Point.php';

    class ColorPoint extends Point {
        protected string $color;

        public function __construct(int $x=0, int $y=0, string $color='Black') {
            parent::__construct($x, $y);
            $this->color = $color;
        }

        public function getColor(): string {
            return $this->y;
        }

        public function setColor(string $value) {
            $this->color = $value;
        }

        public function __toString(): string {
            return "$this->color: " . parent::__toString();
        }
    }

    $color = new ColorPoint();
    echo $color . PHP_EOL;
?>