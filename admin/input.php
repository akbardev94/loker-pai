<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$butuh = $_POST['butuh'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into perusahaan values('','$nama','$alamat','$butuh')");
 
// mengalihkan halaman kembali ke index.php
header("location:perusahaan.php");
 
?>