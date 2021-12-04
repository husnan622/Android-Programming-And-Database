<!DOCTYPE HTML>
<html>
   <head>
      <title>Contoh Konstanta Bernama</title>
   </head>
   <body>
      <?php
         define("PHI", 3.14);
       
         $radius = 30;
         $keliling = 2 * PHI * $radius;     
         
         print("Keliling lingkaran = $keliling");
      ?>
   </body>
</html>
