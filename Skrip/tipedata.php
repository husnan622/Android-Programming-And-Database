<!DOCTYPE HTML>
<html>
   <head>
      <title>Tipe Data</title>
   </head>
   <body>
      <?php
         $var = "Pulau Samalona";
         print($var . " -> " . gettype($var) . "<br>");
         
         $var = 60;
         print($var . " -> " . gettype($var) . "<br>");

         $var = 60.75;
         print($var . " -> " . gettype($var) . "<br>");
         
         $var = true;
         print($var . " -> " . gettype($var) . "<br>");
         
         $var = [12, 45, 67];
         print_r($var); 
         print(" -> " . gettype($var) . "<br>");
      ?>
   </body>
</html>
