<!DOCTYPE HTML>
<html>
   <head>
      <title>Perhitungan Keliling Lingkaran</title>
   </head>
   <body>
      <?php
         if (!isset($_POST["jari-jari"]))
             print("Salah pemanggilan!");
         else {
             $jariJari = $_POST["jari-jari"];
             $keliling = 2 * 3.14 * $jariJari;
             print("Keliling lingkaran: $keliling");
         }
      ?>
   </body>
</html>
