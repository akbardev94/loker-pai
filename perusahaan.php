<?php
include "header.php";
?>
<h2 class="mt-3" align="center">Daftar Perusahaan</h2>
<div class="container-fluid">
  <div class="row">
    <div class="col">
    <table class="table">
      <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Nama Perusahaan</th>
        <th scope="col">Alamat</th>
	      <th scope="col">Posisi</th>
	      <th scope="col">Action</th>
      </tr>
	      <?php 
		      include 'koneksi.php';
		      $perusahaan = mysqli_query($koneksi,"SELECT * FROM perusahaan");
	      	$no = 1;		
	      	while($d = mysqli_fetch_array($perusahaan)){
		  	?>
    </thead>
      <tbody>
        <tr>
          <th scope="row"><?php echo $no++; ?></th>
          <td><?php echo $d['nama']; ?></td>
          <td><?php echo $d['alamat']; ?></td>
	        <td><?php echo $d['butuh']; ?></td>
          <td> <a href="daftar.php?id=<?php echo $d['id']; ?>" class="btn btn-warning text-white">Apply</a></td>
        </tr>
	        <?php 
		        }
		      ?>
      </tbody>
    </table>
    </div>
  </div>
</div>

<?php
include "footer.php";
?>