<!-- 
• Resource bukan merupakan tipe data yang sebenarnya. 
• Resource merupakan penyimpanan referensi ke fungsi dan sumber daya di 
luar PHP.
• Resource tidak seperti tipe data lainnya, dia bertindak sebagai referensi 
atau pengenal untuk mengakses data sumber daya lain. -->
<?php
$conn = mysqli_connect(localhost, "root", "admin", "buku");
$fp = fopen("index.php",'r');