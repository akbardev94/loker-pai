
<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $password = $_POST['password'];   
   $sql = "SELECT * FROM user WHERE username = '$username' AND password='$password'";
   $query = $koneksi->query($sql);
   $data = mysqli_fetch_array($query);
   $jml = mysqli_num_rows($query);

   if($jml > 0){
      $_SESSION['username'] = $data['username'];
      $_SESSION['password'] = $data['password'];
      
      header('location: admin/index.php');
   }else{
      echo "<p align='center'>Login Gagal</p>";
      echo "<meta http-equiv='refresh' content='2; url=formlogin.php'>";
   }
  
?>