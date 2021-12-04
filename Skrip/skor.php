<!DOCTYPE HTML>
<html>
   <head>
      <title>Penentuan Skor</title>
   </head>
   <body>
      <?php
         $nilai = 89; // Ganti dengan nilai antara 0 dan 100
         $skor = "";

         if ($nilai >= 90)
            $skor  = "A";
         elseif ($nilai >= 70)
            $skor  = "B";
         elseif ($nilai >= 60)
            $skor  = "C";
         elseif ($nilai >= 50)
            $skor  = "D";
         else
            $skor  = "E";
          
         print("Skor untuk $nilai: $skor");                 
      ?>
   </body>
</html>
