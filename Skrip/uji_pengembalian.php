<!DOCTYPE HTML>
<html>
   <head>
      <title>Uji Pengembalian Barang</title>
      <style>
         label {
            width: 110px;
            float: left;
         }
      </style>
   </head>
   <body>
      <form action="inv_pengembalian.php" method="post">
         <p>
            <label>Kode barang:</label>
            <input type="text" name="kd barang">
         </p>

         <p>
            <label>Tanggal kembali (yyyy/mm/dd):</label>
            <input type="text" name="tanggal">
         </p>
         <p>
            <input type="submit" value="Kirim">
         </p>
      </form>
   </body>
</html>
