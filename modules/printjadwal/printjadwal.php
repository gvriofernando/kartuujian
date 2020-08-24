<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Print Daftar Hadir Ujian</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Print Daftar Hadir Ujian</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <form method = "post" action = "daftarhadir.php">
          <div class="form-group">
            <label for="exampleInputPassword1">Mata Kuliah</label>
            <select class="form-control" name="select_matkul">
                <?php
                  $query = "select * from matkul";
                  $hasil = mysqli_query($con,$query); 
                  while ($qtabel = mysqli_fetch_assoc($hasil)) {
                ?>
                <option value="<?php echo $qtabel['kode_matkul'] ?>">
                  <?php echo $qtabel['kode_matkul'];
                  echo" - ";
                  echo $qtabel['nama_matkul'];
                  ?>  </option>
                <?php
                    }
                ?>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Semester</label>
            <select class="form-control" name="select_semester">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
          </div>
          <input type="submit" value ="Print">
        </form>
      </div>
              <!-- /.card-body -->
    </div>
        <!-- /.card -->
  </div>
</div>