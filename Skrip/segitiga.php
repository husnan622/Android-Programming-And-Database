
<!DOCTYPE HTML>
<html>
   <head>
      <title>Segitiga</title>
   </head>
   <body>
      <?php
         $tinggi = 8; // Tinggi segitiga
         
         for ($baris = 1; $baris <= $tinggi ; $baris++) {            
            // Tampilkan * sebanyak nilai $baris
            for ($kolom = 1; $kolom <= $baris; $kolom++) {
               print("*");
            }
   
            // Pindah baris
            print("<br>");
         }         
      ?>
   </body>
</html>

