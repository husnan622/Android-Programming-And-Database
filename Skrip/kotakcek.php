<!DOCTYPE HTML>
<html>
   <head>
      <title>Kotak Cek</title>
   </head>
   <body>
      <form action="datapost.php" method="post">
         <fieldset>
            <legend>Warna-warna baju yang disukai:</legend>
            <p>
               <input type="checkbox" 
                      name="biru" value="Biru"
                      checked>Biru
            </p>
            <p>          
               <input type="checkbox" 
                      name="merah" value="Merah">Merah
            </p>
            <p>          
               <input type="checkbox" 
                      name="putih" value="Putih">Putih
            </p>
            <p>          
               <input type="checkbox" 
                      name="hitam" value="Hitam">Hitam
            </p>    
            <p>      
               <input type="checkbox" 
                      name="kuning" value="Kuning">Kuning
            </p>
            <p>          
               <input type="checkbox" 
                      name="hijau" value="Hijau">Hijau
            </p>         
         </fieldset>
         <input type="submit" value="Kirim">
      </form>
   </body>
</html>
