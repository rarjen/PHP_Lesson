<!DOCTYPE HTML>
<html>
    <body>

        <?php
            $f1Team = array("RedBull", "Mercedes", "Ferrari");
            echo "I Like ".$f1Team[0]." and ".$f1Team[2]." teams.<br><br>";

            //Menhhitung panjang array
            $arrlength = count($f1Team);
            echo "<br>Panjang Array: ".$arrlength;
            echo "<br>";
            for($i = 0; $i < $arrlength; $i++){
                echo $f1Team[$i];
                echo "<br>";
            }
        ?>

    </body>
</html>