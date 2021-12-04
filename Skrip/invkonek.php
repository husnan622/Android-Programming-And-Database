<?php
   error_reporting(0);

   DEFINE ('DBPEMAKAI',  'namaPemakaiAnda');
   DEFINE ('DBPASSWORD', 'passwordAnda');
   DEFINE ('DBHOST',     'localhost');
   DEFINE ('DBNAMA',     'namaPemakaiAnda_android');
 		
   $koneksi = mysqli_connect(DBHOST, DBPEMAKAI, 
                             DBPASSWORD, DBNAMA);
   if (mysqli_connect_errno()) {
      print("\"[FALSE]\",\"" . mysqli_connect_error() . "\"");
      exit();      
   }   
?>
