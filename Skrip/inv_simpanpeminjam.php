<?php
   include_once("invkonek.php");

   $ok = true;
   // Periksa variabel-variabel $_POST   
   if (!isset($_POST["kd_barang"]))
       $ok = false;
   else
       $kd_barang = $_POST["kd_barang"];
   
   if (!isset($_POST["kd_peminjam"]))
       $ok = false;
   else
       $kd_peminjam = $_POST["kd_peminjam"];
   
   if (!isset($_POST["tanggal"]))
       $ok = false;
   else
       $tanggal = $_POST["tanggal"];
   
   if (! $ok) {
      print("\"[FALSE]\",\"Salah pemanggilan\"");  
      exit();
   }
   
   // Pastikan data inventori belum dipinjam
   $sql = "SELECT status FROM inventori " .
          "WHERE kd_inv = \"$kd_barang\";";
   
   $hasil = mysqli_query($koneksi, $sql);
   if ($hasil) {
       $baris = mysqli_fetch_row($hasil);
       if ($baris) {
          $status = $baris[0];
          if ($status != 1) {
             print("\"[FALSE]\",\"Barang tidak tersedia\"");  
             exit();
          }       
       }
       else {
          print("\"[FALSE]\",\"Kode barang salah\"");  
          exit();        
       } 
   }
           
   // Lakukan penyimpanan dan perubahan data
   $ok = true;
   $hasil = mysqli_query($koneksi, "START TRANSACTION;");
   if ($hasil) {
      $sql = "INSERT INTO transaksi (kd_inv, sejak, kd_peminjam) " .
             "VALUES (\"$kd_barang\", \"$tanggal\", \"$kd_peminjam\");";
             
      $hasil = mysqli_query($koneksi, $sql);
      if ($hasil) {
        $sql = "SELECT LAST_INSERT_ID();";
        $hasil = mysqli_query($koneksi, $sql);
        if ($hasil) {
           $baris = mysqli_fetch_row($hasil);
           $no_transaksi = $baris[0];
           
           // Update inventori
           $sql = "UPDATE inventori " .
                  "SET no_transaksi = \"$no_transaksi\", " .
                  "status = 0 " .
                  "WHERE kd_inv = \"$kd_barang\";";
           
           $hasil = mysqli_query($koneksi, $sql);
           if (! $hasil)
              $ok = false; 
        }    
        else
           $ok = false; 
      }      
      else
         $ok = false; 
   }
   else
      $ok = false; 
  
   if ($ok)
       $hasil = mysqli_query($koneksi, "COMMIT;");
   else
       $hasil = mysqli_query($koneksi, "ROLLBACK;");
   
   if ($ok)
       print("Data sudah disimpan!");
   else
       print("\"[FALSE]\",\"Gagal menyimpan data\"");
   
   mysqli_close($koneksi);
?>
