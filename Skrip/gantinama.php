<!DOCTYPE HTML>
<html>
   <head>
      <title>Pengubahan Data Pemain</title>
      <style>
         label {
            width: 110px;
            float: left;
         }
      </style>
   </head>
   <body>
      <form action="gantidata.php" method="post">
         <p>
             <label>Kode pemain:</label>
             <input type="text" name="kode_pem">
         </p>
         <p>
             <label>Nama:</label>
             <input type="text" name="nama">
         </p>
         <p>
            <input type="submit" value="Simpan">
            <input type="reset" value="Kosongkan">
         </p>   
      </form>
   </body>
</html>
