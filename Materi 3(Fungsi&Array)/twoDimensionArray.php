<!DOCTYPE HTML>
<html>
    <body>

        <?php
            $laptops = array (
                array("HP",22,18), array("Lenovo",15,13), array("Asus",5,2), array("MSI",17,15)
            );
            echo $laptops[0][0].": In Stock: ".$laptops[0][1].", sold:".$laptops[0][2]." unit";

            for($row = 0; $row < 4; $row++){
                echo "<p><b>Row Number $row</b></p>";
                echo "<ul>";
                for($col = 0; $col < 3; $col++){
                    echo "<li>".$laptops[$row][$col]."</li>";
                }
                echo "</ul>";
            }
        ?>



    </body>
</html>