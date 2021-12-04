<?php
   include_once("invkonek.php");
   
   if (! $_GET["dicari"]) {
      print("\"[FALSE]\",\"Salah pemanggilan\"");
      exit();
   }
   
   $dicari = $_GET["dicari"];
	 
   $sql =  "SELECT kd_inv, nama_inv, merek, nama_panjang, status " .
           "FROM inventori, laboratorium " .
           "WHERE inventori.kd_lab = laboratorium.kode_lab ".
           "AND kd_inv = \"$dicari\"";         
   
   $hasil = mysqli_query($koneksi, $sql);
   
   $baris = "";
   if ($hasil) 
      $baris = mysqli_fetch_row($hasil);

   if ($baris) {   
      $kd_inv       = $baris[0];
      $nama_inv     = $baris[1];
      $merek        = $baris[2];  
      $nama_panjang = $baris[3];
      $status       = $baris[4];
 
      if ($status == 0)
          $keterangan = "Sedang dipinjam";
      elseif ($status == 1)
          $keterangan = "Tersedia";    
      else 
          $keterangan = $status;          
      
      print("<table border='1'>");
      
      print("<tr>");
      print("<td>Kode barang:</td>");
      print("<td>$kd_inv</td>");
      print("</tr>");
      
      print("<tr>");
      print("<td>Nama barang:</td>");
      print("<td>$nama_inv</td>");
      print("</tr>");
      
      print("<tr>");
      print("<td>Merek:</td>");
      print("<td>$merek</td>");
      print("</tr>");
      
      print("<tr>");
      print("<td>Milik lab:</td>");
      print("<td>$nama_panjang</td>");
      print("</tr>");
      
      print("<tr>");
      print("<td>Status:</td>");
      print("<td>$no_transaksi</td>");
      print("</tr>");
      print("</table>");
   }
   else {
      print("\"[FALSE]\",\"Tidak ada hasil\""); 
   }
       
   mysqli_close($koneksi);
?>
