<!DOCTYPE HTML>
<html>
   <head>
      <title>Penentuan Genap atau Ganjil</title>
   </head>
   <body>
      <?php
         $bilangan= 34;
         
         if ($bilangan % 2 == 0)
            $kategori = "Genap";
        else
            $kategori = "Ganjil";

         print("$bilangan merupakan bilangan $kategori");
      ?>
   </body>
</html>
