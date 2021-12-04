<!DOCTYPE HTML>
<html>
   <head>
      <title>Penambahan Data Pemain</title>
      <style>
         label {
            width: 110px;
            float: left;
         }
      </style>
   </head>
   <body>
      <form action="simpemain.php" method="post">
         <p>
             <label>Kode pemain:</label>
             <input type="text" name="kode_pem">
         </p>
         <p>
             <label>Nama:</label>
             <input type="text" name="nama">
         </p>
         <p>
             <label>Tanggal lahir:</label>
             <input type="date" name="tgl_lahir">
         </p>
         <p>
            <label>Jender:</label>
            <input type="radio" 
                   name="jender" value="1" checked>Pria
            <input type="radio" 
                   name="jender" value="0">Perempuan     
         </p>
         <p>
            <input type="submit" value="Simpan">
            <input type="reset" value="Kosongkan">
         </p>   
      </form>
   </body>
</html>
