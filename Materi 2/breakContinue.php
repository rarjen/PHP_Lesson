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
        for($x = 0; $x <=10; $x++){ //program berhenti begitu mencapai 4 dan output 0-3
            if($x == 4){
                break;
            }
            echo "The Number is: $x <br>";
        }
        for($x = 0; $x <=10; $x++){ //program akan melakukan pengecekan pada value 4 dan melanjutkan program
            if($x == 4){
                continue;
            }
            echo "The Number is: $x <br>";
        }
    ?>
    
</body>
</html>