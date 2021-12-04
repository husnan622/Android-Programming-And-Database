<?php
  include_once("invotentikasi.php"); 

  if (!otentikasi_ok()) {
    print("\"[FALSE]\",\"Pemakai atau password salah\"");
    exit();
  }  
  
  // Baca peran
  $pemakai = $_POST["pemakai"];
  $sql = "SELECT peran FROM orang " .
         "WHERE pemakai = \"$pemakai\";";
         
  $hasil = mysqli_query($koneksi, $sql);           
  if (! $hasil) {
    print("\"[FALSE]\",\"Pencarian peran gagal\"");
    exit();
  }
    
  $baris = mysqli_fetch_row($hasil);
  $peran = $baris[0];

  mysqli_close($koneksi);
  
  print("\"[TRUE]\",\"$peran\""); 
?>
