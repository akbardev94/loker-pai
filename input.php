<?php
// koneksi database
include 'koneksi.php';


$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$pendidikan = $_POST['pendidikan'];
$status = $_POST['status'];
$foto = $_POST['foto'];



// menginput data ke database
mysqli_query($koneksi, "insert into daftar values('','$nama','$alamat','$no_hp','$email','$pendidikan', $status,'$foto')");

// mengalihkan halaman kembali ke index.php
header("location:perusahaan.php");
