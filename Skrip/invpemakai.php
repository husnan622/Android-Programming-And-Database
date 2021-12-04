<?php
   include_once("invkonek.php");
   
   if (! $_POST["random"]) {
      print("\"[FALSE]\",\"Salah pemanggilan\"");
      exit();
   }
	 
   $sql =  "SELECT kd_orang, nama_orang FROM orang " .
           "ORDER BY nama_orang;";
   
   $hasil = mysqli_query($koneksi, $sql);
   
   while ($baris = mysqli_fetch_row($hasil)) {    
     $kd_orang   = $baris[0];
     $nama_orang  = $baris[1];  
     print("\"$kd_orang\",\"$nama_orang\"\n");
   }
  
   mysqli_close($koneksi);
?>
