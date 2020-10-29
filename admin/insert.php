<?php
include "header.php";
?>

<h2 class="mt-3" align="center">Tambah Perusahaan</h2>

<div class="container-fluid">
  <div class="row">
  <div class="col mt-4 ml-5">
  <form method="post" action="input.php" class="mt-3">
    <div class="form-group">
      <label for="nama">Nama Perusahaan</label>   
      <div class="input"><input type="text" name="nama"></div> 
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>   
      <div class="input"><input type="text" name="alamat"></div> 
    </div>
    <div class="form-group">
      <label for="butuh">Posisi</label>   
      <div class="input"><input type="text" name="butuh"></div> 
    </div>
    <div class="form-group">
      <div class="input">
        <input type="submit" value="Save" class="btn btn-primary ml-4 tombol">
        <a href="perusahaan.php" class="btn btn-dark ml-2">Cancel</a>
    </div>
      
    </div>
  </form>
  </div>
  <div class="col">
      <img src="../assets/img/system.svg" alt="Form_Application" height="400" width="400">
  </div>
  </div>
</div>
<?php
include "footer.php";
?>