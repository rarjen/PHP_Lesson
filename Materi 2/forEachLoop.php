<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $colors = array("red", "green", "blue", "yellow");
        foreach($colors as $value){
            echo "$value <br>";
        }

        $age = array("Otniel"=>"21", "Kevin"=>"20", "Abiel"=>"19");
        foreach($age as $x => $val){
            echo "$x = $val <br>";
        }


    ?>
    
</body>
</html>