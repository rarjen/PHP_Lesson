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
        function fungsi1(){
            $x = 5; //local scope
            echo "<p>Variable x didlm fungsi: $x</p><br>";
        }

        fungsi1();

        function tambah($a, $b){
            $hasil = $a + $b; //local scope
            echo $hasil;
        }
        function modulo($a, $b){
            $hasil = $a % $b; //local scope
            echo $hasil;
        }
        tambah(5,7);
        echo "<br>";
        modulo(7,5);
        

    ?>
</body>
</html>

