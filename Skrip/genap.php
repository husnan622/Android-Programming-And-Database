<!DOCTYPE HTML>
<html>
   <head>
      <title>Penentuan Genap atau Ganjil</title>
   </head>
   <body>
      <?php
         $bilangan= 35;
         $kategori = "Ganjil";
         
         if ($bilangan % 2 == 0)
            $kategori = "Genap";

         print("$bilangan merupakan bilangan $kategori");
      ?>
   </body>
</html>
