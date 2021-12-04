<?php
   include_once("invkonek.php");

   // Penambahan data
   $hash = crypt("pelikan"); 
   $sql =  "INSERT INTO orang VALUES " . 
           "('ADMIN1', 'ADMINISTRATOR SISTEM', 'S', 1, 'admin', \"$hash\")," .
           "('S-200801', 'Rianto', 'S', 0, 'rianto', \"$hash\"),"
           .
           "('S-200802', 'Amin Jauhari', 'S', 0, 'jauhari', \"$hash\");";
   print("Perintah SQL: $sql<br>");
   
   $hasil = mysqli_query($koneksi, $sql);
   if ($hasil)
       print("Data sudah disimpan");
   else
       print("Gagal menyimpan data");
   
   mysqli_close($koneksi);
?>
