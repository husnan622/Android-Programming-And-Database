<?php
   include_once("invkonek.php");
   
   if (! $_POST["random"]) {
      print("\"[FALSE]\",\"Salah pemanggilan\"");
      exit();
   }
	 
   $sql =  "SELECT * FROM laboratorium ORDER BY kode_lab;";
   
   $hasil = mysqli_query($koneksi, $sql);
   
   while ($baris = mysqli_fetch_row($hasil)) {    
     $kd_lab   = $baris[0];
     $nama_panjang  = $baris[2];  
     print("\"$kd_lab\",\"$nama_panjang\"\n");
   }
  
   mysqli_close($koneksi);
?>
