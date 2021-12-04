<!DOCTYPE HTML>
<html>
   <head>
      <title>Pengubahan Nilai Argumen - Tanpa Referensi</title>
   </head>
   <body>
      <?php
         $mobil = "Honda CR-V";      
         print("Mobil: $mobil <br>");
         ganti_data($mobil, "Toyota Inova");
         print("Mobil: $mobil <br>");

         print("<hr>");
         
         $warna = "Merah";      
         print("Warna: $warna <br>");
         ganti_data($warna, "Hijau");
         print("Warna: $warna <br>");
         
         // Definisi fungsi
         function ganti_data($var, $pegganti) {
            $var = $pengganti;
         }
      ?>
   </body>
</html>
