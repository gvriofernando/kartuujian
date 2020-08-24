<?php
  if (isset($_POST['submitted'])) {
    foreach($_POST AS $key => $value) { $_POST[$key] = mysqli_real_escape_string($con,$value); }
      $sql1 = "INSERT INTO jadwal_ujian (   kode_matkul,
                                            jenis_ujian,
                                            tanggal,
                                            waktu,
                                            semester
                                        ) 
              VALUES  (   '{$_POST['kodematkul']}',
                          '{$_POST['jenisujian']}',
                          '{$_POST['tanggal_ujian']}',
                          '{$_POST['waktu']}',
                          '{$_POST['semester']}'
                      ) 
          ";
      $hasilkueri = mysqli_query($con,$sql1) or die(mysqli_error()); 

      if($hasilkueri==1) {
        echo '  <div class="widget-content">
              <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <i class="fa fa-ok-sign"></i><strong>Sukses!</strong> 
                Data Jadwal Disimpan.
              </div>
                      </div>';
      } else {
        echo '  <div class="widget-content">
              <div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <i class="fa fa-ban-circle"></i><strong>Terjadi Kesalahan!</strong> 
                Maaf data jadwal gagal disimpan.
              </div>
              </div>';
      }

      echo '<meta http-equiv="refresh" content="2;url=index.php?mod=jadwal">' ;
      buatngosonginhalamanbawah();  
  } 
?>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Formulir Tambah Jadwal</h3>
    </div>
              <!-- /.card-header -->
              <!-- form start -->
    <form role="form" method="post">
        <div class="card-body">
          <div class="form-group">
          <label for="exampleInputEmail1">Mata Kuliah</label>
          <select class="form-control" name="kodematkul">
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
            <label for="exampleInputPassword1">Jenis Ujian</label>
            <select class="form-control" name="jenisujian">
              <option value="UTS">UTS</option>
              <option value="UAS">UAS</option>
            </select>
          </div>
          <div class="form-group">
                <label>Tanggal</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input  name="tanggal_ujian"
                            type="text" 
                            class="form-control"
                            data-inputmask-alias="datetime"
                            data-inputmask-inputformat="yyyy/mm/dd"
                            data-mask
                    >
                </div>
          </div>
          <div class="form-group">
            <div class="bootstrap-timepicker">
                  <div class="form-group">
                    <label>Waktu</label>

                    <div class="input-group date" id="timepicker" data-target-input="nearest">
                      <input name = "waktu" type="text" class="form-control datetimepicker-input" data-target="#timepicker"/>
                      <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="far fa-clock"></i></div>
                      </div>
                      </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Semester</label>
            <select class="form-control" name="semester">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
            </select>
          </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="hidden" value="1" name="submitted" /> 
        </div>
    </form>
</div>
