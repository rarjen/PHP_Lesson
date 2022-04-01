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
        $favColor = "blue";
        switch($favColor){
            case "red":
                echo "Your Favourite color is red!";
                break;
            case "blue":
                echo "Your Favourite color is blue!";
                break;
            case "green":
                echo "Your Favourite color is green!";
                break;
            default:
                echo "Your Favourite color is neither red, blue, nor green!";

        }
    ?>
    
</body>
</html>