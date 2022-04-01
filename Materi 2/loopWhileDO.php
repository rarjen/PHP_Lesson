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
        $x = 1;
        $y = 6;
         while($x <= 5){
             echo "The Number is: $x <br>";
             $x++;
         }

        // Do While akan melalukan pengecekan pada variable dulu. 
        // jadi bila angka lebih dari kondisi while maka hanya akan melakukan print dari value didlm variable

         do {
            echo "The Number is: $y <br>";
            $y++;
         } while ($y <= 5);
    ?>
    
</body>
</html>