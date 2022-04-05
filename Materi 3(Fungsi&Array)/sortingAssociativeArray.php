<!DOCTYPE HTML>
<html>
    <body>

        <?php
            function printArr($Arr){
                foreach($Arr as $x => $x_value){
                    echo "Key: ".$x.", value: ".$x_value;
                    echo "<br>";
                }
            }

            $age = array ("Otniel" => "21", "Kevin" => "20", "Abiel" => "19");
            printArr($age);

            echo "Sortir berdasarkan umur";
            echo "<br>";
            asort($age);//kecil ke besar //arsort : besar ke kecil
            printArr($age);

            echo "Sortir berdasarkan nama";
            echo "<br>";
            ksort($age); //mengurutkan dari A-Z //krsort : mengurutkan dari Z-A
            printArr($age); 
        ?>

    </body>
</html>