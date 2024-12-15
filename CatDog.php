<?php
    abstract class Animal {
        protected string $name;

        public function __construct() {
            $this->name = get_class($this);
        }
        public function __destruct() {
            echo "$this->name destroyed..." . PHP_EOL;
            unset($this->name);
        }
        abstract public function walk();
    }

    interface Dog {
        public function bark();
    }

    interface Cat {
        public function meow();
    }

    class CatDog extends Animal implements Cat, Dog {
        public function bark() {
            echo "$this->name: \"grrrrrrr...\"" . PHP_EOL;
        }
        public function meow() {
            echo "$this->name: \"meow...\"" . PHP_EOL;
        }
        public function walk() {
            echo "$this->name walks...." . PHP_EOL;
        }
    }

    function playWithCat(Cat $cat) {
        $cat->meow();
    }

    function playWithDog(Dog $dog) {
        $dog->bark();
    }

    $cd = new CatDog();

    playWithCat($cd);
    playWithDog($cd);  
    $cd->walk();

    unset($cd);

    echo "Whatever ...." . PHP_EOL;
?>