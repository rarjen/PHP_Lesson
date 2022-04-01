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
        $x = array("a" => "red", "b" => "green");
        $y = array("c" => "blue", "d" => "yellow");

        print_r($x + $y); //penggabungan array (union) & print_r khusus untuk display array
        print_r($x == $y); //membandingkan apakah array x sama dengan array y
    ?>
    
</body>
</html>