<?php

  if ($_SESSION['shakakses'] == 'mhs') {
    $semesterberapa = $_SESSION['ssemester'];
    $c = " AND a.`semester` = $semesterberapa";
  }

  $sql = "SELECT 
			a.`id_jadwal`,
			a.`kode_matkul`,
			b.nama_matkul,
			a.`jenis_ujian`,
			a.`tanggal`,
			a.`waktu`,
			b.`semester`
		FROM 
			jadwal_ujian a,
			matkul b
		WHERE a.kode_matkul = b.kode_matkul" . $c;
  $result = mysqli_query($con,$sql);
  $modname="jadwal";  
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Tabel Data Jadwal Ujian </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?mod=home">Home</a></li>
          <li class="breadcrumb-item active">Tabel Data Jadwal Ujian</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="row">
  <div class="col-12">
    <div class="card">
<?php if ($_SESSION['shakakses'] == 'admin') { ?>
      <form name="form1" method="post" action=""> 
        <div class="card-header">
          <a href="index.php?mod=<?php echo $modname; ?>_new" class="btn btn-s-md btn-success"> + Tambah Baru</a>
      </div>
      </form>
<?php } ?>
                                <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
<?php if ($_SESSION['shakakses'] == 'admin') { ?>
              <th>Action</th>
<?php } ?>
              <th width="20">No</th>
              <th>ID Jadwal</th>
              <th>Kode Mata Kuliah</th>
              <th>Nama Mata Kuliah</th>
              <th>Jenis Ujian</th>
              <th>Tanggal</th>
              <th>Waktu</th>
              <th>Semester</th>
            </tr>
          </thead>
          <tbody>
            <?php
                $i=1;
                while($data = mysqli_fetch_array($result)){
            ?>    
            <tr>
<?php if ($_SESSION['shakakses'] == 'admin') { ?>
                <td>
                  <div align="center">
                    <a href="index.php?mod=<?php echo $modname; ?>_edit&id=<?php echo $data['id_jadwal'] ?>">
                      <span class="fa fa-edit" style="font-size:16px">
                      </span>
                    </a>
                    &nbsp;&nbsp;
                    <a href="index.php?mod=<?php echo $modname; ?>_delete&id=<?php echo $data['id_jadwal'] ?>">
                      <span class="fa fa-trash" style="font-size:16px">
                      </span>
                    </a>
                  </div>
                </td>
<?php } ?>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['id_jadwal'] ?></td>
                <td><?php echo $data['kode_matkul'] ?></td>
                <td><?php echo $data['nama_matkul'] ?></td>
                <td><?php echo $data['jenis_ujian'] ?></td>
                <td><?php echo $data['tanggal'] ?></td>
                <td><?php echo $data['waktu'] ?></td>
                <td><?php echo $data['semester'] ?></td>
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