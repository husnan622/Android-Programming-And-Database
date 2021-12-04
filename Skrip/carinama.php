<?php
   include_once("konekdb.php");

   // Periksa variabel-variabel $_POST   
   if (!isset($_POST["penggalan"]))
       die("Salah pemanggilan!");
   else
       $penggalan = $_POST["penggalan"];
   
   // Cari nama
   $sql =  "SELECT nama FROM pemain " .
           "WHERE nama LIKE \"%$penggalan%\";";
   
   $hasil = mysqli_query($koneksi, $sql);
    while ($baris = mysqli_fetch_row($hasil)) {    
     $nama = $baris[0];  
     print("$nama<br>");
   }
   
   mysqli_close($koneksi);
?>
