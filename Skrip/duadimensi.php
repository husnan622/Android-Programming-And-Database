<!DOCTYPE HTML>
<html>
   <head>
      <title>Array Berdimensi Dua</title>
   </head>
   <body>
      <?php
         $data = array(
                    array(4, 5, 6),
                    array(88, 99, 77),
                    array(32, 33, 34)
                  );                                        
         
         for ($baris = 0; $baris < 3; $baris++) {
            for ($kolom = 0; $kolom < 3; $kolom++)        
                print($data[$baris][$kolom] . " ");
            
            print("<br>");
         }
      ?>
   </body>
</html>
