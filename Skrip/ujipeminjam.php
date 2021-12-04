<!DOCTYPE HTML>
<html>
   <head>
      <title>Uji Peminjaman Barang</title>
      <style>
         label {
            width: 110px;
            float: left;
         }
      </style>
   </head>
   <body>
      <form action="inv_simpanpeminjam.php" method="post">
         <p>
            <label>Kode barang:</label>
            <input type="text" name="kd barang">
            <input type="hidden" name="status" value="1">
         </p>
         <p>
            <label>Peminjam:</label>
            <input type="text" name="kd_peminjam">
         </p>
         <p>
            <label>Tanggal pinjam (yyyy/mm/dd):</label>
            <input type="text" name="tanggal">
         </p>
         <p>
            <input type="submit" value="Kirim">
         </p>
      </form>
   </body>
</html>
