<?php
if (isset($_GET['id']) ) { 
    $id = $_GET['id']; 
    $row = mysqli_fetch_array ( mysqli_query($con,"SELECT * FROM jadwal_ujian WHERE id_jadwal = '$id' "));
    $semesters = $row['semester'];
    $kode_mk = $row['kode_matkul'];
    $jenistes = $row['jenis_ujian'];
  if (isset($_POST['submitted'])) {
    foreach($_POST AS $key => $value) { $_POST[$key] = mysqli_real_escape_string($con,$value); }
      $sql1 = "UPDATE jadwal_ujian set      kode_matkul              ='{$_POST['kodematkul']}',
                                            jenis_ujian              ='{$_POST['jenisujian']}',
                                            tanggal                  ='{$_POST['tanggal_ujian']}',
                                            waktu                    ='{$_POST['waktu']}',
                                            semester                 ='{$_POST['semester']}'
                              WHERE   id_jadwal              ='$id'";
      $hasilkueri = mysqli_query($con,$sql1) or die(mysqli_error()); 

      if($hasilkueri==1) {
        echo '  <div class="widget-content">
              <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <i class="fa fa-ok-sign"></i><strong>Sukses!</strong> 
                Data Jadwal DiUpdate.
              </div>
                      </div>';
      } else {
        echo '  <div class="widget-content">
              <div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <i class="fa fa-ban-circle"></i><strong>Terjadi Kesalahan!</strong> 
                Maaf data jadwal gagal DiUpdate.
              </div>
              </div>';
      }

      echo '<meta http-equiv="refresh" content="2;url=index.php?mod=jadwal">' ;
      buatngosonginhalamanbawah();  
  } 
  if($semesters == "1"){
    $s1 = "selected";
    $s2 = "";
    $s3 = "";
    $s4 = "";
    $s5 = "";
    $s6 = "";
    $s7 = "";
  }else if($semesters == "2"){
    $s1 = "";
    $s2 = "selected";
    $s3 = "";
    $s4 = "";
    $s5 = "";
    $s6 = "";
    $s7 = "";
  }else if($semesters == "3"){
    $s1 = "";
    $s2 = "";
    $s3 = "selected";
    $s4 = "";
    $s5 = "";
    $s6 = "";
    $s7 = "";
  }else if($semesters == "4"){
    $s1 = "";
    $s2 = "";
    $s3 = "";
    $s4 = "selected";
    $s5 = "";
    $s6 = "";
    $s7 = "";
  }else if($semesters == "5"){
    $s1 = "";
    $s2 = "";
    $s3 = "";
    $s4 = "";
    $s5 = "selected";
    $s6 = "";
    $s7 = "";
  }else if($semesters == "6"){
    $s1 = "";
    $s2 = "";
    $s3 = "";
    $s4 = "";
    $s5 = "";
    $s6 = "selected";
    $s7 = "";
  }else if($semesters == "7"){
    $s1 = "";
    $s2 = "";
    $s3 = "";
    $s4 = "";
    $s5 = "";
    $s6 = "";
    $s7 = "selected";
  }else{
    $s1 = "";
    $s2 = "";
    $s3 = "";
    $s4 = "";
    $s5 = "";
    $s6 = "";
    $s7 = "";
  }

  if($jenistes == "UAS"){
    $uass = "selected";
    $utss = "";
  }else if($jenistes == "UTS"){
    $uass = "";
    $utss = "selected";
  }else{
    $uass = "";
    $utss = "";
  }
?>

<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Formulir Edit Jadwal</h3>
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
            <label for="exampleInputPassword1">Jenis Ujian</label>
            <select class="form-control" name="jenisujian">
              <option value="UTS" <?php echo $utss; ?>>UTS</option>
              <option value="UAS" <?php echo $uass; ?>>UAS</option>
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
                            value = "<?php echo $row['tanggal']; ?>"
                    >
                </div>
          </div>
          <div class="form-group">
            <div class="bootstrap-timepicker">
                  <div class="form-group">
                    <label>Waktu</label>

                    <div class="input-group date" id="timepicker" data-target-input="nearest">
                      <input name = "waktu" type="text" class="form-control datetimepicker-input" data-target="#timepicker" value = "<?php echo $row['waktu']; ?>"/>
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
              <option value="1" <?php echo $s1; ?>>1</option>
              <option value="2" <?php echo $s2; ?>>2</option>
              <option value="3" <?php echo $s3; ?>>3</option>
              <option value="4" <?php echo $s4; ?>>4</option>
              <option value="5" <?php echo $s5; ?>>5</option>
              <option value="6" <?php echo $s6; ?>>6</option>
              <option value="7" <?php echo $s7; ?>>7</option>
            </select>
          </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Edit</button>
            <input type="hidden" value="1" name="submitted" /> 
        </div>
    </form>
</div>
<?php
}
?>
