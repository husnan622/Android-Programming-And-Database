<!DOCTYPE HTML>
<html>
   <head>
      <title>Variabel Lokal</title>
   </head>
   <body>
      <?php
         $mobil = "Honda CR-V";
         
         print("Mobil: $mobil <br>");
         
         ganti_mobil();
         
         print("Mobil: $mobil <br>");
         
         function ganti_mobil() {
            $mobil = "Toyota Inova";
            
            print("$mobil (Fungsi ganti_mobil())<br>");
         }
      ?>
   </body>
</html>
