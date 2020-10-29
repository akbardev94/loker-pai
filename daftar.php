<?php
include "header.php";
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-2"></div>
    <div class="col">
  <form method="post" action="input.php">

    <div class="form-group">
      <label for="foto">Foto</label>
      <div class="input"><input type="file" id="foto" name="foto"></div>
    </div>

    <div class="form-group">
      <label for="nama">Nama Lengkap</label>
      <div class="input"><input type="text" name="nama"></div>
    </div>

    <div class="form-group">
      <label for="alamat">Alamat</label>
      <div class="input"><input type="text" name="alamat"></div>
    </div>

    <div class="form-group">
      <label for="nohp">No Hp</label>
      <div class="input"><input type="text" name="no_hp"></div>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <div class="input"><input type="text" name="email"></div>
    </div>

    <div class="form-group">
      <label for="pendidikan">Pendidikan Terakhir</label>
      <div class="input"><input type="text" name="pendidikan"></div>
      <div class="input">
        <input type="submit" value="Apply" class="btn btn-primary ml-4 tombol"> 
        <a href="perusahaan.php" class="btn btn-dark ml-2">Cancel</a>
    </div>
    </div>

  </form>
  </div>
  <div class="col">
        <img src="assets/img/resume.svg" alt="Form_Application" height="400" width="400">  
  </div>
  </div>
</div>
<?php
include "footer.php";
?>