<?php
    class Car{
        public $color;
        public $model;

        // public function __car($color, $model){ //CONSTRUCTOR
        //     $this->$color = $color;
        //     $this->$model = $model;
        // }
        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
            }
        
        public function message(){
            return "My Car is ".$this->color." ".$this->model."!";
        }
    }

    $myCar = new Car("Black", "Lamborghini");
    $myCar2 = new Car("Orange", "Ferrari");
    echo $myCar -> message();
    echo "<br>";
    echo $myCar2 -> message();
    echo $myCar -> message();