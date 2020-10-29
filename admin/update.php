<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$butuh = $_POST['butuh'];

 
// update data ke database
mysqli_query($koneksi,"update perusahaan set nama='$nama', alamat='$alamat', butuh='$butuh' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:perusahaan.php");
 
?>