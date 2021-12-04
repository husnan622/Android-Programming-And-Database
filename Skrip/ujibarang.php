<!DOCTYPE HTML>
<html>
   <head>
      <title>Uji Barang</title>
      <style>
         label {
            width: 110px;
            float: left;
         }
      </style>
   </head>
   <body>
      <form action="inv_simpanbrg.php" method="post">
         <p>
            <label>Kode barang:</label>
            <input type="text" name="kode">
            <input type="hidden" name="status" value="1">
         </p>
         <p>
            <label>Nama barang:</label>
            <input type="text" name="nama">
         </p>
         <p>
            <label>Merek:</label>
            <input type="text" name="merek">
         </p>
         <p>
            <label>Kode lab (4 karakter):</label>
            <input type="text" name="lokasi">
         </p>
         <p>
            <input type="submit" value="Kirim">
         </p>
      </form>
   </body>
</html>
