<!DOCTYPE HTML>
<html>
    <body>

        <?php
            function printArr($x){
                $p = count($x);
                for($i = 0; $i < $p; $i++){
                    echo $x[$i];
                    echo "<br>";
                }
            }

            $cars = array("Toyota", "Mitsubishi", "Volvo", "BMW");
            printArr($cars);

            rsort($cars);
            echo "<br>";
            echo "setelah di sortir desc <br>";
            printArr($cars)
        ?>

    </body>
</html>