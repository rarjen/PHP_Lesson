<!DOCTYPE HTML>
<html>
    <body>

        <?php
            //Merubah string menjadi waktu dan tanggal
            $dd=strtotime("08.54pm April 03 2022 Sunday");
            echo "Created date is ".date("l Y-m-d h:ia", $dd);

            echo "<br><br>================<br>";
            echo "TOMORROW<br>";
            $d=strtotime("tomorrow"); //melakukan print hari esok
            echo date("Y-m-d h:i:sa", $d);

            echo "<br>NEXT SATURDAY(Sabtu besok)<br>"; //Melakukan print hari sabtu yang akan datang
            $d = strtotime("next saturday");
            echo date("Y-m-d h:i:sa", $d);

            echo "<br>3 Bulan kedapan<br>"; //Melakukan print hari 3 bulan kedapan
            $d = strtotime("+3 Months");
            echo date("Y-m-d h:i:sa", $d);

            echo "<br>3 Bulan kedapan<br>"; //Melakukan print hari 3 bulan kedapan
            $d = strtotime("next weeks");
            echo date("Y-m-d h:i:sa", $d);

        ?>

    </body>
</html>
