<?php

    function tambah(int $x, int $y){
        $a = 0;
        $a = $a + 10;
        $z = $x + $y;
        return $z;
    }
    $a = 10;
    $b = 5;

    echo "5 + 10 = ".tambah(5,10)."<br>";
    echo "7 + 3 = ".tambah(7,3)."<br>";
    echo "a+b= ".tambah($a,$b);
    echo $a;

?>