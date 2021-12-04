<?php
   include_once("konekdb.php");
	 
   $sql =  "SELECT pemain.nama, film.judul, pemeran.sebagai " .
           "FROM pemain, film, pemeran  " .
           "WHERE pemain.kode_pem = pemeran.kode_pem AND " .
           "pemeran.kode_film = film.kode_film " .
           "ORDER BY pemain.nama;";
   
   $hasil = mysqli_query($koneksi, $sql);
   
   while ($baris = mysqli_fetch_row($hasil)) {    
     $nama    = $baris[0];  
     $judul   = $baris[1];
     $sebagai = $baris[2];
     print("\"$nama\",\"$judul\",\"$sebagai\"<br>");
   }
  
   mysqli_close($koneksi);
?>
