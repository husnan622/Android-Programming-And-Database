<?php
  include_once("invotentikasi.php"); 

  if (!otentikasi_ok()) {
    print("\"[FALSE]\",\"Salah pemanggilan\"");
    exit();
  }  
 
  $ok = true;
  if (! isset($_POST['kode']))
    $ok = false;
  
  if (! isset($_POST['keadaan']))
    $ok = false;
  
  if (! $ok) {
     print("Salah penggunaan!");
     exit();
  }

  $kode = $_POST['kode'];
  $keadaan = $_POST['keadaan'];
   
  $sql = "UPDATE peranti SET keadaan = $keadaan " .
         "WHERE kode_peranti = \"$kode\";";
  $hasil = mysqli_query($koneksi, $sql);
  if ($hasil)
    print("Sukses");
  else
	print("Gagal");  
?>
