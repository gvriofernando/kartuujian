<?php
  if (isset($_POST['submitted'])) {
    foreach($_POST AS $key => $value) { $_POST[$key] = mysqli_real_escape_string($con,$value); }
      $pas=md5($_POST['password']);
      $sql1 = "INSERT INTO user (   username, 
                                    password,
                                    nama, 
                                    hakakses,
                                    kelas,
                                    tahunakademik,
                                    semester
                                ) 
              VALUES  (   '{$_POST['username']}', 
                          '$pas', 
                          '{$_POST['nama']}',
                          '{$_POST['hak_akses']}',
                          '{$_POST['kelas']}',
                          '{$_POST['tahun_akademik']}',
                          '{$_POST['semester']}'
                      ) 
          ";
      $hasilkueri = mysqli_query($con,$sql1) or die(mysqli_error()); 

      if($hasilkueri==1) {
        echo '  <div class="widget-content">
              <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <i class="fa fa-ok-sign"></i><strong>Sukses!</strong> 
                Data User Disimpan.
              </div>
                      </div>';
      } else {
        echo '  <div class="widget-content">
              <div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <i class="fa fa-ban-circle"></i><strong>Terjadi Kesalahan!</strong> 
                Maaf data user gagal disimpan.
              </div>
              </div>';
      }

      echo '<meta http-equiv="refresh" content="2;url=index.php?mod=user">' ;
      buatngosonginhalamanbawah();  
  } 
?>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Formulir Tambah User</h3>
    </div>
              <!-- /.card-header -->
              <!-- form start -->
    <form role="form" method="post">
        <div class="card-body">
          <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input  name="username"
              type="text" 
              class="form-control" 
              id="exampleInputEmail1" 
              placeholder="Masukan Username"
          >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input  name="password" 
                type="password" 
                class="form-control" 
                id="exampleInputPassword1" 
                placeholder="Password"
            >
          </div>
          <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input  name="nama"
              type="text" 
              class="form-control" 
              id="exampleInputEmail1" 
              placeholder="Masukan Nama"
          >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Hak Akses</label>
            <select class="form-control" name="hak_akses">
              <option value="admin ">Admin</option>
              <option value="mhs">Mahasiswa</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Kelas</label>
            <select class="form-control" name="kelas">
              <option value="A">A</option>
              <option value="B">B</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tahun Akademik</label>
            <select class="form-control" name="tahun_akademik">
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
            </select>
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
