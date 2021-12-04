<!DOCTYPE HTML>
<html>
   <head>
      <title>Fungsi Tanpa Nilai Balik</title>
   </head>
   <body>
      <?php
         print("Alfa<br>Beta<br>");
         garisPemisah();
         print("Charlie<br>Delta<br>");
         
         garisPemisah();
         
         // Definisi fungsi
         function garisPemisah() {
            print("<hr>");
         }         
      ?>
   </body>
</html>
