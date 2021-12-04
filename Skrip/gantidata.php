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
   
   // Pemutakhiran data
   $sql =  "UPDATE pemain " .
           "SET nama = \"$nama\" " . 
           "WHERE kode_pem = \"$kode_pem\";";
   print("Perintah SQL: $sql<br>");
   
   $hasil = mysqli_query($koneksi, $sql);
   if ($hasil)
       print("Nama sudah diperbaharui");
   else
       print("Gagal menyimpan data");
   
   mysqli_close($koneksi);
?>
