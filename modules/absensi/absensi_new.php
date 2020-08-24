<?php
  if (isset($_POST['submitted'])) {
    foreach($_POST AS $key => $value) { $_POST[$key] = mysqli_real_escape_string($con,$value); }
      $sql1 = "INSERT INTO absensi (    nim_mahasiswa,
                                        kode_matkul,
                                        jumlah_absensi,
                                        keterangan
                                ) 
              VALUES  (   '{$_POST['nim_mahasiswa']}',
                          '{$_POST['kode_matkul']}',
                          '{$_POST['jumlah_absensi']}',
                          '{$_POST['keterangan']}'
                      ) 
          ";
      $hasilkueri = mysqli_query($con,$sql1) or die(mysqli_error()); 

      if($hasilkueri==1) {
        echo '  <div class="widget-content">
              <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <i class="fa fa-ok-sign"></i><strong>Sukses!</strong> 
                Data Absensi Disimpan.
              </div>
                      </div>';
      } else {
        echo '  <div class="widget-content">
              <div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <i class="fa fa-ban-circle"></i><strong>Terjadi Kesalahan!</strong> 
                Maaf data absensi gagal disimpan.
              </div>
              </div>';
      }

      echo '<meta http-equiv="refresh" content="2;url=index.php?mod=absensi">' ;
      buatngosonginhalamanbawah();  
  } 
?>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Formulir Tambah Data Absensi</h3>
    </div>
              <!-- /.card-header -->
              <!-- form start -->
    <form role="form" method="post">
        <div class="card-body">
          <div class="form-group">
          <label for="exampleInputEmail1">NIM Mahasiswa</label>
          <select class="form-control" name="nim_mahasiswa">
                <?php
                  $query = "select * from user  where hakakses = 'mhs'";
                   $hasil = mysqli_query($con,$query); 
                  while ($qtabel = mysqli_fetch_assoc($hasil)) {
              ?>
                <option value="<?php echo $qtabel['username'] ?>">
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
            <select class="form-control" name="kode_matkul">
                <?php
                  $query = "select * from matkul";
                   $hasil = mysqli_query($con,$query); 
                  while ($qtabel = mysqli_fetch_assoc($hasil)) {
              ?>
                <option value="<?php echo $qtabel['kode_matkul'] ?>">
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
            >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Keterangan</label>
            <select class="form-control" name="keterangan">
              <option value="Mencukupi">Mencukupi</option>
              <option value="Tidak Mencukupi">Tidak Mencukupi</option>
            </select>
          </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="hidden" value="1" name="submitted" /> 
        </div>
    </form>
</div>
