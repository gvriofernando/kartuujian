<?php
  if(isset($_POST['kirim'])==1){
    $c=" AND a.nim_mahasiswa like '%" . $_POST['table_search']. "%'";
  } else {
    $c="";
  }

  $sql = "SELECT 
            a.`id_absensi`,
            a.nim_mahasiswa,
            b.nama,
            a.kode_matkul,
            c.nama_matkul,
            a.jumlah_absensi,
            a.keterangan
          FROM
            absensi a,
            user b,
            matkul c
          where 
            a.kode_matkul = c.kode_matkul 
          AND
            a.nim_mahasiswa = b.username" . $c;
  $result = mysqli_query($con,$sql);
  $modname="absensi";  
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Tabel Data Absensi</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?mod=home">Home</a></li>
          <li class="breadcrumb-item active">Tabel Data Mata Kuliah</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <form name="form1" method="post" action=""> 
        <div class="card-header">
          <a href="index.php?mod=<?php echo $modname; ?>_new" class="btn btn-s-md btn-success"> + Tambah Baru</a>
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 300px;">
               Cari Nama&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;                 
                <input type="text" name="table_search" class="form-control float-right" placeholder="Tulis Nama User">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
              </div>
            </div>
        </div>
        <input type="hidden" name="kirim" value="1">
      </form>
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>Action</th>
              <th width="20">No</th>
              <th>ID Absensi</th>
              <th>NIM Mahasiswa</th>
              <th>Nama Mahasiswa</th>
              <th>Kode Mata Kuliah</th>
              <th>Nama Mata Kuliah</th>
              <th>Jumlah Absensi</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php
                $i=1;
                while($data = mysqli_fetch_array($result)){
            ?>    
            <tr>
                <td>
                  <div align="center">
                    <a href="index.php?mod=<?php echo $modname; ?>_edit&id=<?php echo $data['id_absensi'] ?>">
                      <span class="fa fa-edit" style="font-size:16px">
                      </span>
                    </a>
                    &nbsp;&nbsp;
                    <a href="index.php?mod=<?php echo $modname; ?>_delete&id=<?php echo $data['id_absensi'] ?>">
                      <span class="fa fa-trash" style="font-size:16px">
                      </span>
                    </a>
                  </div>
                </td>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['id_absensi'] ?></td>
                <td><?php echo $data['nim_mahasiswa'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['kode_matkul'] ?></td>
                <td><?php echo $data['nama_matkul'] ?></td>
                <td><?php echo $data['jumlah_absensi'] ?></td>
                <td><?php echo $data['keterangan'] ?></td>
            </tr>
            <?php
                $i++;
                }
            ?>      
          </tbody>
        </table>
      </div>
              <!-- /.card-body -->
    </div>
        <!-- /.card -->
  </div>
</div>