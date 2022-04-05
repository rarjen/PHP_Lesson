<!DOCTYPE HTML>
<html>
    <body>

        <?php
            $age = array("Otniel"=>"21", "Kevin"=>"20", "Abiel"=>"19");

            foreach($age as $x => $x_value){
                echo "Key= ".$x.", Value= ".$x_value;
                echo "<br>";
            }
        ?>

    </body>
</html>