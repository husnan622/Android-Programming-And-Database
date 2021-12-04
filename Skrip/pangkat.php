<!DOCTYPE HTML>
<html>
   <head>
      <title>Contoh Pembuatan Fungsi</title>
   </head>
   <body>
      <?php
         $x = pangkat(6, 2);
         print("pangkat(6, 2) -> $x<br>");
         
         $y = pangkat(3, 4);
         print("pangkat(3, 4) -> $y<br>");
         
         function pangkat($x, $y) {
            $hasil = pow($x, $y);

            return($hasil);
         }         
      ?>
   </body>
</html>
