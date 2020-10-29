<?php 
// mengaktifkan session
session_start();
 
// menghapus semua session
session_destroy();
 
// mengalihkan halaman sambil mengirim pesan logout
echo "<p align='center'>Anda telah logout</p>";
      echo "<meta http-equiv='refresh' content='2; url=../index.php'>";
?>