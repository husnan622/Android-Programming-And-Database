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
         
         foreach ($kamus as $kunci => $isi) 
            print("$kunci -> $isi<br>\n");
      ?>
   </body>
</html>
