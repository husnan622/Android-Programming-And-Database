<!DOCTYPE HTML>
<html>
   <head>
      <title>Efek break</title>
   </head>
   <body>
      <?php
        $bilangan = 1;
        while ($bilangan <= 5) {
           print("$bilangan<br>");           

           if ($bilangan == 3)
              break;
          
           // Naikkan bilangan sebesar 1
           $bilangan++;           
        } 
      ?>
   </body>
</html>
