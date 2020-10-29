<?php
include "header.php";
?>

<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from daftar where id='$id'");
while ($d = mysqli_fetch_array($data)) {
?>
<div class="container-fluid">
  <div class="row">  
    <div class="col-1"></div>
    <div class="col-5">
    <form method="post" action="update2.php">
        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <div class="input"><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></div>
        </div>

        <div class="form-group">
          <label for="alamat">Alamat</label>
          <div class="input"><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></div>
        </div>

        <div class="form-group">
          <label for="nohp">No Hp</label>
          <div class="input"><input type="text" name="no_hp" value="<?php echo $d['no_hp']; ?>"></div>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <div class="input"><input type="text" name="email" value="<?php echo $d['email']; ?>"></div>
        </div>

        <div class="form-group">
          <label for="id">Foto</label>
          <div class="input">
            <input type="file" id="foto" name="foto">
          </div>
        </div>
        
        <div class="form-group">
          <label for="pendidikan">Pendidikan Terakhir</label>
          <div class="input"><input type="text" name="pendidikan" value="<?php echo $d['pendidikan']; ?>">
        </div>

         <div class="form-group">
          <label for="status">Status</label>
          <div class="input"><input type="text" name="status" value="<?php echo $d['status']; ?>">
        </div>
          
        <div class="input">
            <input type="submit" value="Update" class="btn btn-primary ml-5 tombol">
            <a href="pelamar.php" class="btn btn-dark ml-2">Cancel</a>
        </div>
      
      </div>
        
    </div>
        
  </div>

  <div class="col">
          <img src="../assets/img/system.svg" alt="Form_Application" height="400" width="400">  
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