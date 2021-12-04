<!DOCTYPE HTML>
<html>
   <head>
      <title>Tombol Radio</title>
   </head>
   <body>
      <form action="datapost.php" method="post">
         <fieldset>
            <legend>Warna apa yang paling Anda sukai?</legend>
            <p>
               <input type="radio" 
                      name="pilihan" value="biru" checked>Biru
            </p>
            <p>          
               <input type="radio" 
                      name="pilihan" value="merah">Merah
            </p>
            <p>          
               <input type="radio" 
                      name="pilihan" value="putih">Putih
            </p>
            <p>          
               <input type="radio" 
                      name="pilihan" value="hitam">Hitam
            </p>    
            <p>      
               <input type="radio" 
                      name="pilihan" value="lainnya">Lainnya
            </p>
         </fieldset>
         <input type="submit" value="Kirim">
      </form>
   </body>
</html>
