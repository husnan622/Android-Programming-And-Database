<!DOCTYPE HTML>
<html>
   <head>
      <title>Penggunaan do..while</title>
   </head>
   <body>
      <?php
        $bilangan = 1;
        do {
           print("$bilangan<br>");           

           // Naikkan bilangan sebesar 1
           $bilangan++;           
        } while ($bilangan <= 5);
      ?>
   </body>
</html>
