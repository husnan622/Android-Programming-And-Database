<?php
   include_once("konekdb.php");

   // Periksa variabel-variabel $_POST   
   if (!isset($_POST["kode_pem"]))
       die("Salah pemanggilan!");
   else
       $kode_pem = $_POST["kode_pem"];
   
   if (!isset($_POST["nama"]))
       die("Salah pemanggilan!");
   else
       $nama = $_POST["nama"];
   
   if (!isset($_POST["tgl_lahir"]))
       die("Salah pemanggilan!");
   else
       $tgl_lahir = $_POST["tgl_lahir"];
   
   if (!isset($_POST["jender"]))
       die("Salah pemanggilan!");
   else
       $jender = $_POST["jender"];
   
   // Penambahan data
   $sql =  "INSERT INTO pemain " .
           "VALUES (\"$kode_pem\", \"$nama\", " . 
           "\"$tgl_lahir\", \"$jender\");";
   print("Perintah SQL: $sql<br>");
   
   $hasil = mysqli_query($koneksi, $sql);
   if ($hasil)
       print("Data sudah disimpan");
   else
       print("Gagal menyimpan data");
   
   mysqli_close($koneksi);
?>
