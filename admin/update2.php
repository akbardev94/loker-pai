<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$pendidikan = $_POST['pendidikan'];
$status = $_POST['status'];
$foto = $_POST['foto'];


// update data ke database
mysqli_query($koneksi, "update daftar set nama='$nama', alamat='$alamat',no_hp='$no_hp',email='$email',pendidikan='$pendidikan', status='$status',foto='$foto' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:pelamar.php");
