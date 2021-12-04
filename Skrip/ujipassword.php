<!DOCTYPE HTML>
<html>
   <head>
      <title>Password</title>
      <style>
         label {
            width: 110px;
            float: left;
         }
      </style>
   </head>
   <body>
      <form action="invlogin.php" method="post">
         <p>
            <label>Pemakai:</label>
            <input type="text" name="pemakai">
         </p>
         <p>          
            <label>Password:</label>
            <input type="password" name="sandi">
         </p>
         <input type="submit" value="Kirim">
      </form>
   </body>
</html>
