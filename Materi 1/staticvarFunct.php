<?php
function fungsi1(){
    static $x = 0;
    echo $x;
    $x++;
}

fungsi1();
fungsi1();
fungsi1();
fungsi1();