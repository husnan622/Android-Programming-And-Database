<!DOCTYPE HTML>
<html>
   <head>
      <title>Pengaksesan Array</title>
   </head>
   <body>
      <?php         
         $burung = array("Merak", "Beo", "kakaktua", 
                   "Parkit", "Merpati");

         for ($indeks = 0; $indeks < count($burung); $indeks++)
            print($burung[$indeks] . "<br>"); 

         print("<hr>");

         // Ubah dua elemen
         $burung[0] = "Cenderawasih";
         $burung[4] = "Kasturi";

         // Tambahkan elemen
         $burung[5] = "Maleo";
         
         for ($indeks = 0; $indeks < count($burung); $indeks++)
            print($burung[$indeks] . "<br>");          
      ?>
   </body>
</html>
