<!DOCTYPE HTML>
<html>
   <head>
      <title>Penambahan Array</title>
   </head>
   <body>
      <?php
         $burung[] = "Merak";
         $burung[] = "Beo";
         $burung[] = "Kakaktua";

         print_r($burung); // Tampilkan             
         print("<hr>");
         
         $burung[] = "Parkit";
         $burung[] = "Merpati";
         
         print_r($burung); // Tampilkan             
      ?>
   </body>
</html>
