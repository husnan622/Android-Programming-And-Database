<?php
   include_once("invkonek.php");
   
  // -----------------------------------------------
  // Untuk memvalidasi password
  // Nilai balik: TRUE = valid, 
  //              FALSE = tidak valid
  // -----------------------------------------------

  function password_valid($pemakai, $sandi) {  
    global $koneksi;   
 
    // Baca data hash pemakai
    $sql = "SELECT hash FROM orang " .
           "WHERE pemakai = \"$pemakai\";";
    
    $hasil = mysqli_query($koneksi, $sql);           
    if (! $hasil)
        return FALSE;
    
    $baris = mysqli_fetch_row($hasil);
    $hash_pemakai = $baris[0];
    
    if (hash_equals($hash_pemakai, crypt($sandi, $hash_pemakai)))
      return TRUE;
    else
      return FALSE;
  }

  // -----------------------------------------------
  // Otentikasi pemakai
  // Nilai balik: "[TRUE]"  -> Otentikasi OK
  //              "[FALSE]" untuk keadaan sebaliknya
  // -----------------------------------------------

  function otentikasi_ok() {
    if ((!isset($_POST["pemakai"])) ||
        (!isset($_POST["sandi"])))
       return FALSE;
    else
    {
      $pemakai = $_POST["pemakai"];
      $sandi   = $_POST["sandi"];

      if (password_valid($pemakai, $sandi))
        return TRUE;
      
      else     
        return FALSE;
    }     
  }
?>
