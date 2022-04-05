<?php
    function message(){
        echo "Hello World";
    }

    function addition($x, $y){
        $hasil = $x + $y;
        echo $hasil;
        return $hasil;
    }

    message();
    echo " ";
    addition(2,3);
    