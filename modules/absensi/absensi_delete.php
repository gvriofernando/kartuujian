<?php
if (isset($_GET['id']) ) { 
    $id = $_GET['id']; 
    $row = mysqli_fetch_array (mysqli_query($con,"SELECT * FROM absensi WHERE id_absensi = '$id' "));
    $nim_mhs = $row['nim_mahasiswa'];
    $kode_mk = $row['kode_matkul'];
    $ket = $row['keterangan'];
  if (isset($_POST['submitted'])) {
    foreach($_POST AS $key => $value) { $_POST[$key] = mysqli_real_escape_string($con,$value); }
      $sql = "DELETE FROM absensi WHERE id_absensi = '$id' ";
      $hasilkueri = mysqli_query($con,$sql) or die(mysqli_error()); 

      if($hasilkueri==1) {
        echo '  <div class="widget-content">
              <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <i class="fa fa-ok-sign"></i><strong>Sukses!</strong> 
                Data Absensi Dihapus.
              </div>
                      </div>';
      } else {
        echo '  <div class="widget-content">
              <div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <i class="fa fa-ban-circle"></i><strong>Terjadi Kesalahan!</strong> 
                Maaf data absensi gagal dihapus.
              </div>
              </div>';
      }

      echo '<meta http-equiv="refresh" content="2;url=index.php?mod=absensi">' ;
      buatngosonginhalamanbawah();  
  } 
  if($ket == "Mencukupi"){
      $ckp = "selected";
      $tdkckp = "";
  }else if($ket == "Tidak Mencukupi"){
      $ckp = "";
      $tdkckp = "selected";
  }else {
      $ckp = "";
      $tdkckp = "";
  }
?>

<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title">Formulir Edit Data Absensi</h3>
    </div>
              <!-- /.card-header -->
              <!-- form start -->
    <form role="form" method="post">
        <div class="card-body">
          <div class="form-group">
          <label for="exampleInputEmail1">NIM Mahasiswa</label>
          <select class="form-control" name="nim_mahasiswa" disabled>
                <?php
                  $query = "select * from user";
                   $hasil = mysqli_query($con,$query); 
                  while ($qtabel = mysqli_fetch_assoc($hasil)) {
              ?>
                <option value="<?php echo $qtabel['username'] ?>"
                    <?php        
                        if($qtabel['username'] == $nim_mhs){
                            echo "selected";
                        } else {
                            echo "";
                        }
                    ?>
                >
                  <?php echo $qtabel['username'];
                  echo"-";
                  echo $qtabel['nama'];
            ?>  </option>
                <?php
                    }
                ?>
                </select>
          <div class="form-group">
            <label for="exampleInputPassword1">Kode Matakuliah</label>
            <select class="form-control" name="kode_matkul" disabled>
                <?php
                  $query = "select * from matkul";
                   $hasil = mysqli_query($con,$query); 
                  while ($qtabel = mysqli_fetch_assoc($hasil)) {
              ?>
                <option value="<?php echo $qtabel['kode_matkul'] ?>"
                   <?php        
                        if($qtabel['kode_matkul'] == $kode_mk){
                            echo "selected";
                        } else {
                            echo "";
                        }
                    ?>
                >
                  <?php echo $qtabel['kode_matkul'];
                  echo"-";
                  echo $qtabel['nama_matkul'];
            ?>  </option>
                <?php
                    }
                ?>
                </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Jumlah Absensi</label>
            <input  name="jumlah_absensi" 
                    type="number" 
                    class="form-control" 
                    id="exampleInputPassword1" 
                    placeholder="Masukan jumlah absensi"
                    value = "<?php echo $row['jumlah_absensi']; ?>"
                    disabled
            >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Keterangan</label>
            <select class="form-control" name="keterangan" disabled>
              <option value="Mencukupi" <?php echo $ckp; ?>>Mencukupi</option>
              <option value="Tidak Mencukupi" <?php echo $tdkckp; ?>>Tidak Mencukupi</option>
            </select>
          </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Delete</button>
            <input type="hidden" value="1" name="submitted" /> 
        </div>
    </form>
</div>
<?php
}
?>
