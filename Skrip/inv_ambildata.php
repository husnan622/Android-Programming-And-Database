<?php
   include_once("invkonek.php");
      
   if (! $_POST["dicari"]) {
      print("\"[FALSE]\",\"Salah pemanggilan\"");
      exit();
   }
   
   $dicari = $_POST["dicari"];
	 
   $sql =  "SELECT nama_inv, merek, nama_panjang, status, no_transaksi " .
           "FROM inventori, laboratorium " .
           "WHERE inventori.kd_lab = laboratorium.kode_lab ".
           "AND kd_inv = \"$dicari\"";    
   
   $hasil = mysqli_query($koneksi, $sql);
   
   $baris = "";
   if ($hasil) 
      $baris = mysqli_fetch_row($hasil);

   if ($baris) {   
      $nama_inv     = $baris[0];
      $merek        = $baris[1];  
      $nama_panjang = $baris[2];
      $status       = $baris[3];
      $no_transaksi = $baris[4];
      
      $peminjam = "";
      $sejak = "";
      if ($status == "0") {
         // Baca tabel transaksi
         $sql = "SELECT kd_peminjam, sejak FROM transaksi " .
                "WHERE no_transaksi =\"$no_transaksi\";";
          
         $hasil = mysqli_query($koneksi, $sql);
   
         if ($hasil) {
            $baris = mysqli_fetch_row($hasil);
            if ($baris) {
               $kd_peminjam = $baris[0];
               $sejak = $baris[1];
         
               $sql = "SELECT nama_orang FROM orang " .
                      "WHERE kd_orang =\"$kd_peminjam\";";
                     
               $hasil = mysqli_query($koneksi, $sql);
               if ($hasil) {
                  $baris = mysqli_fetch_row($hasil);
                  if ($baris) {
                      $peminjam = $baris[0];
                  }
               }
            }
         }
      }
 
      print("\"nama\",\"$nama_inv\"\n");       
      print("\"merek\",\"$merek\"\n");       
      print("\"lokasi\",\"$nama_panjang\"\n");       
      print("\"status\",\"$status\"\n");        
      print("\"peminjam\",\"$peminjam\"\n");        
      print("\"sejak\",\"$sejak\"\n");        
   }
   else {
      print("\"[FALSE]\",\"Tidak ada hasil\""); 
   }
       
   mysqli_close($koneksi);
?>
