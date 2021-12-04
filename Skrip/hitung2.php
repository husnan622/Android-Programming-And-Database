<!DOCTYPE HTML>
<html>
   <head>
      <title>Perhitungan Keliling Lingkaran</title>
   </head>
   <body>
      <?php
         if (!isset($_GET["jari-jari"]))
             print("Salah pemanggilan!");
         else {
             $jariJari = $_GET["jari-jari"];
             $keliling = 2 * 3.14 * $jariJari;
             print("Keliling lingkaran: $keliling");
         }
      ?>
   </body>
</html>
