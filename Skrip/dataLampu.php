<?php
  include_once("invotentikasi.php"); 

  if (!otentikasi_ok()) {
    print("\"[FALSE]\",\"Salah pemanggilan\"");
    exit();
  }  
 
  $sql = "SELECT * FROM peranti ORDER BY kode_peranti;";
  $hasil = mysqli_query($koneksi, $sql); 
  
  while ($baris = mysqli_fetch_row($hasil)) {    
    $kode_peranti = $baris[0];
    $keterangan   = $baris[1];
    $keadaan      = $baris[2];

    print("\"$kode_peranti\",\"$keadaan\",\"$keterangan\"\n");
  }
?> 
