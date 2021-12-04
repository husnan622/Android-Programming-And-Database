<?php
   include_once("invkonek.php");

   $ok = true;
   // Periksa variabel-variabel $_POST   
   if (!isset($_POST["kode"]))
       $ok = false;
   else
       $kode = $_POST["kode"];
   
   if (!isset($_POST["nama"]))
       $ok = false;
   else
       $nama = $_POST["nama"];
   
   if (!isset($_POST["merek"]))
       $ok = false;
   else
       $merek = $_POST["merek"];
   
   if (!isset($_POST["lokasi"]))
       $ok = false;
   else
       $lokasi = $_POST["lokasi"];
   
   if (!isset($_POST["status"]))
       $ok = false;
   else
       $status = $_POST["status"];
   
   if (! $ok) {
      print("\"[FALSE]\",\"Salah pemanggilan\"");  
      exit();
   }
   
   // Penambahan data
   $sql =  "INSERT INTO inventori " .
           "(kd_inv, nama_inv, merek, kd_lab, status)" .
           "VALUES (\"$kode\", \"$nama\", " . 
           "\"$merek\", \"$lokasi\", \"$status\");";
   
   $hasil = mysqli_query($koneksi, $sql);
   if ($hasil)
       print("\"[TRUE]\",\"Data sudah disimpan\"");
   else
       print("\"[FALSE]\",\"Gagal menyimpan data\"");
   
   mysqli_close($koneksi);
?>
