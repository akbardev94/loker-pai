<?php
include "header.php";
?>

<div class="container-fluid">
    <div class="col-2"></div>
    <div class="col">
    <table class="table">
      <thead>
        <a href="insert.php" class="btn btn-primary font-weight-bold mt-2">+ | ADD</a>
        <p></p>
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
          <td>
		        <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-info">Edit</a>
		        <a href="delete.php?id=<?php echo $d['id']; ?>" class="btn btn-danger">Delete</a>
	        </td>
        </tr>
	      <?php 
		      }
		    ?>
     </tbody>
    </table>
    <div class="col-2"></div>
  </div>
</div>

<?php
include "footer.php";
?>