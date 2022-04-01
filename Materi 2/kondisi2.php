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
        $t = 25;
        echo "<p>The Hour is ".$t;
        echo ", and will give the following message: </p>";

        if($t <= 10){
            echo "Good Morning!";
        }
        elseif($t <= 13 ){
            echo "Good Day!";
        }
        elseif($t <= 17){
            echo "Good Afternoon!";
        }
        elseif($t <= 20){
            echo "Good Evening!";
        }
        elseif($t < 24){
            echo "Good Night!";
        }
        else{
            echo "ERROR!";
        }
    ?>
    
</body>
</html>