<!DOCTYPE HTML>
<html>
   <head>
      <title>Penentuan Skor</title>
   </head>
   <body>
      <?php
         $nilai = 89; // Ganti dengan nilai antara 0 dan 100
         $skor = "";
         $nilai_baru =89;

         // Bagi dengan 10 dan buang bagian pecahan
         $nilai_baru = intval($nilai / 10);
         
         switch ($nilai_baru) {
            case 10:
            case 9:
               $skor = "A";
               break;
            case 8: 
            case 7:
               $skor = "B";
               break;
            case 6:
               $skor = "C";
               break;
            case 5:
               $skor = "D";
               break;
            default:
               $skor = "E";
         }
         
         print("Skor untuk $nilai: $skor");                 
      ?>
   </body>
</html>
