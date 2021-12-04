<?php
   include_once("invkonek.php");
   
   // Periksa variabel-variabel $_POST   
   $ok = true;
   if (!isset($_POST["kd_barang"]))
       $ok = false;
   else
       $kd_barang = $_POST["kd_barang"];
   
   if (!isset($_POST["tanggal"]))
       $ok = false;
   else
       $tanggal = $_POST["tanggal"];
   
   if (! $ok) {
      print("\"[FALSE]\",\"Salah pemanggilan\"");  
      exit();
   }
   
   // Pastikan data inventori sedang dipinjam
   $sql = "SELECT status, no_transaksi FROM inventori " .
          "WHERE kd_inv = \"$kd_barang\";";      
   
   $hasil = mysqli_query($koneksi, $sql);
   if ($hasil) {
       $baris = mysqli_fetch_row($hasil);
       if ($baris) {
          $status = $baris[0];
          $no_transaksi = $baris[1];
          if ($status != "0") {
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
      // Pemutakhiran transaksi
      $sql = "UPDATE transaksi " .
             "SET kembali = \"$tanggal\" " .
             "WHERE no_transaksi = \"$no_transaksi\";";
                   
      $hasil = mysqli_query($koneksi, $sql);
      if ($hasil) {           
         // Pemutakhiran inventori
         $sql = "UPDATE inventori " .
                "SET status = 1, " .
                "no_transaksi = NULL " .
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
  
   if ($ok)
       $hasil = mysqli_query($koneksi, "COMMIT;");
   else
       $hasil = mysqli_query($koneksi, "ROLLBACK;");
   
   if ($ok)
       print("Data sudah disimpan");
   else
       print("\"[FALSE]\",\"Gagal menyimpan data\"");
   
   mysqli_close($koneksi);
?>
