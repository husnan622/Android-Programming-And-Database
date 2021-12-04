<!DOCTYPE HTML>
<html>
   <head>
      <title>Array Asosiatif</title>
   </head>
   <body>
      <?php
         $kamus = array(
                     "mobil" => "car",
                     "sepeda" => "bycicle",
                     "gerobak" => "cart",
                     "pesawat" => "plane",
                     "kereta api" => "train");
         
         while ($elemen = each($kamus)) {
            $indeks = $elemen["key"];
            $nilai = $elemen["value"];
            print("Indeks: $indeks -> Nilai: $nilai<br>\n");
         }   
      ?>
   </body>
</html>
