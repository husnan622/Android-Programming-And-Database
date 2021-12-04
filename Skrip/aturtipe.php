<!DOCTYPE HTML>
<html>
   <head>
      <title>Pengubahan Tipe dengan settype()</title>
   </head>
   <body>
      <?php
         $var = 789.0123;
         print("Isi \$data : " . $var . "<br>");
         
         settype($var, "string");
         print("Konversi ke string:<br>");
         print("Isi \$var : " . $var . "<br>");
         
         settype($var, "float");
         print("Konversi ke float:<br>");
         print("Isi \$var : " . $var . "<br>");
         
         settype($var, "integer");
         print("Konversi ke integer:<br>");
         print("Isi \$var : " . $var . "<br>");
         
         settype($var, "boolean");
         print("Konversi ke boolean:<br>");
         print("Isi \$var : " . $var . "<br>");
      ?>
   </body>
</html>
