<?php
  if (isset($_POST['submitted'])) {
    foreach($_POST AS $key => $value) { $_POST[$key] = mysqli_real_escape_string($con,$value); }
      $sql1 = "INSERT INTO matkul (   kode_matkul,
                                      nama_matkul,
                                      semester,
                                      bobot_sks
                                ) 
              VALUES  (   '{$_POST['kode_matkul']}',
                          '{$_POST['nama_matkul']}',
                          '{$_POST['semester']}',
                          '{$_POST['bobot_sks']}'
                      ) 
          ";
      $hasilkueri = mysqli_query($con,$sql1) or die(mysqli_error()); 

      if($hasilkueri==1) {
        echo '  <div class="widget-content">
              <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <i class="fa fa-ok-sign"></i><strong>Sukses!</strong> 
                Data Mata Kuliah Disimpan.
              </div>
                      </div>';
      } else {
        echo '  <div class="widget-content">
              <div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <i class="fa fa-ban-circle"></i><strong>Terjadi Kesalahan!</strong> 
                Maaf data mata kuliah gagal disimpan.
              </div>
              </div>';
      }

      echo '<meta http-equiv="refresh" content="2;url=index.php?mod=matkul">' ;
      buatngosonginhalamanbawah();  
  } 
?>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Formulir Tambah Mata Kuliah</h3>
    </div>
              <!-- /.card-header -->
              <!-- form start -->
    <form role="form" method="post">
        <div class="card-body">
          <div class="form-group">
          <label for="exampleInputEmail1">Kode Mata Kuliah</label>
          <input  name="kode_matkul"
              type="text" 
              class="form-control" 
              id="exampleInputEmail1" 
              placeholder="Masukan Nama Mata Kuliah"
          >
          </div>
          <div class="form-group">
          <label for="exampleInputEmail1">Nama Mata Kuliah</label>
          <input  name="nama_matkul"
              type="text" 
              class="form-control" 
              id="exampleInputEmail1" 
              placeholder="Masukan Nama Mata Kuliah"
          >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Semester</label>
            <input  name="semester" 
                type="number" 
                class="form-control" 
                id="exampleInputPassword1" 
                placeholder="Masukan Semester"
            >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Bobot SKS</label>
            <input  name="bobot_sks" 
                type="number" 
                class="form-control" 
                id="exampleInputPassword1" 
                placeholder="Masukan Bobot SKS"
            >
          </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="hidden" value="1" name="submitted" /> 
        </div>
    </form>
</div>
