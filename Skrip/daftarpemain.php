<?php
   include_once("konekdb.php");
	 
   $sql =  "SELECT * FROM pemain ORDER BY kode_pem;";
   
   $hasil = mysqli_query($koneksi, $sql);
   
   while ($baris = mysqli_fetch_row($hasil)) {    
     $kode_pem   = $baris[0];
     $nama       = $baris[1];  
     $tgl_lahir  = $baris[2];
     $jender     = $baris[3];
     print("\"$kode_pem\",\"$nama\"," . 
           "\"$tgl_lahir\",\"$jender\"<br>");
   }
  
   mysqli_close($koneksi);
?>
