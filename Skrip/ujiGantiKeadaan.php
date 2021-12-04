<!DOCTYPE HTML>
<html>
   <head>
      <title>Perubahan Keadaan Lampu</title>
      <style>
         label {
            width: 200px;
            float: left;
         }
      </style>
   </head>
   <body>
      <form action="gantiKeadaanLampu.php" method="post">
         <p>
            <label>Pemakai:</label>
            <input type="text" name="pemakai">
         </p>
         <p>          
            <label>Password:</label>
            <input type="password" name="sandi">
         </p>
         <p>          
            <label>Kode lampu (A, B, C, D, E, atau F:</label>
            <input type="text" name="kode">
         </p>
          <p>          
            <label>Keadaan (0 atau 1):</label>
            <input type="text" name="keadaan">
         </p>
         <input type="submit" value="Kirim">
      </form>
   </body>
</html>
