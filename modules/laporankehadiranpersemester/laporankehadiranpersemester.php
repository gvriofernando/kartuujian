<?php
  $sql = "SELECT
            a.kode_matkul,
            b.nama_matkul,
            b.semester,
            COUNT(CASE WHEN a.keterangan ='Mencukupi' THEN 1 END) as mencukupi,
            COUNT(CASE WHEN a.keterangan ='Tidak Mencukupi' THEN 1 END) as tidakmencukupi
          FROM
            absensi a,
            matkul b
          WHERE a.kode_matkul = b.kode_matkul
          GROUP BY b.semester";
  $result = mysqli_query($con,$sql);
  $modname="laporankehadiranpersemester";  
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Tabel Data Laporan Kehadiran per Semester</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?mod=home">Home</a></li>
          <li class="breadcrumb-item active">Tabel Data Laporan Per Semester</li>
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
          <a href="index.php?mod=<?php echo $modname; ?>_grafik" class="btn btn-s-md btn-success">Tampilan Secara Grafik</a>
        </div>
      </form>
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th width="20">No</th>
              <th>Semester</th>
              <th>Mencukupi</th>
              <th>Tidak Mencukupi</th>
            </tr>
          </thead>
          <tbody>
            <?php
                $i=1;
                while($data = mysqli_fetch_array($result)){
            ?>    
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['semester'] ?></td>
                <td><?php echo round(($data['mencukupi']/( $data['mencukupi'] + $data['tidakmencukupi'])) *100, 2)  ?>%</td>
                <td><?php echo round(($data['tidakmencukupi']/( $data['mencukupi'] + $data['tidakmencukupi'])) *100 , 2) ?>%</td>
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