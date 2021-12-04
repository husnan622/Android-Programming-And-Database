<!DOCTYPE HTML>
<html>
   <head>
      <title>Array Asosiatif</title>
   </head>
   <body>
      <?php
         $kamus["mobil"] = "car";
         $kamus["sepeda"] = "bycicle";
         $kamus["gerobak"] = "cart";
         $kamus["pesawat"] = "plane";
         $kamus["kereta api"] = "train";
         
         while (list($indeks, $nilai) = each($kamus))
            print("Indeks: $indeks -> Nilai: $nilai<br>\n");
      ?>
   </body>
</html>
