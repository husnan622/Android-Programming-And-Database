<?php
   include_once("konekdb.php");

   // Periksa variabel-variabel $_POST   
   if (!isset($_POST["kode_pem"]))
       die("Salah pemanggilan!");
   else
       $kode_pem = $_POST["kode_pem"];
   
   // Penghapusan data`
   $sql =  "DELETE FROM pemain " .
           "WHERE kode_pem = \"$kode_pem\";";
   print("Perintah SQL: $sql<br>");
   
   $hasil = mysqli_query($koneksi, $sql);
   if (mysqli_affected_rows($koneksi) == 1)
       print("Data sudah dihapus");
   else
       print("Gagal menghapus data");
   
   mysqli_close($koneksi);
?>
