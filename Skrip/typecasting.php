<!DOCTYPE HTML>
<html>
   <head>
      <title>Type Casting</title>
   </head>
   <body>
      <?php
         $nilai = 456.78;
         print("Isi \$nilai : " . $nilai . "<br>");
         
         print("Konversi ke string:<br>");
         print("Isi \$nilai : " . (string) $nilai . "<br>");
         
         print("Konversi ke float:<br>");
         print("Isi \$nilai : " . (float) $nilai . "<br>");
         
         print("Konversi ke integer:<br>");
         print("Isi \$nilai : " . (integer) $nilai . "<br>");
         
         print("Konversi ke boolean:<br>");
         print("Isi \$nilai : " . (boolean) $nilai . "<br>");
      ?>
   </body>
</html>
