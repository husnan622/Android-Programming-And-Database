<?php
   DEFINE ('DBPEMAKAI',  'namaPemakaiAnda');
   DEFINE ('DBPASSWORD', 'passwordAnda');
   DEFINE ('DBHOST',     'localhost');
   DEFINE ('DBNAMA',     'namaPemakaiAnda_android');
 		
   $koneksi = mysqli_connect(DBHOST, DBPEMAKAI, 
                             DBPASSWORD, DBNAMA);
   if (mysqli_connect_errno()) {
      die("Koneksi ke database server gagal dilakukan: " .
          mysqli_connect_error());
   }   
?>

