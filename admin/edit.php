<?php
include "header.php";
?>
<head>
<title>Perusahaan</title>
</head>
<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from perusahaan where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
<form method="post" action="update.php">
<div class="container2">
  <div class="card-body">
  	<div class="form-group">
      <label for="id"></label>
      <div class="input"><input type="hidden"name="id" value="<?php echo $d['id']; ?>"></div> 
    </div>
    <div class="form-group">
      <label for="nama">Nama Perusahaan</label>   
      <div class="input"><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></div> 
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>   
      <div class="input"><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></div> 
    </div>
    <div class="form-group">
      <label for="nohp">Posisi</label>   
      <div class="input"><input type="text" name="butuh" value="<?php echo $d['butuh']; ?>"></div> 
    </div>
    <div class="form-group">
      <label for="pendidikan"></label>   
      <div class="input">
        <input type="submit" value="Update" class="btn btn-primary tombol">
        <a href="perusahaan.php" class="btn btn-dark ml-2">Cancel</a>
    </div>
    </div>
	<?php 
		}
	?>
</div>
</form>
<br>
<?php
include "footer.php";
?>