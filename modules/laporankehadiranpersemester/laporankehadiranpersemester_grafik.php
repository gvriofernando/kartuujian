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
          GROUP BY b.semester
          ORDER BY b.semester";
  $result = mysqli_query($con,$sql);
  $arraymencukupi = [0,0,0,0,0,0];
  $arraytidakmencukupi = [0,0,0,0,0,0];
  $i = 1;
  while($data = mysqli_fetch_array($result)){
    for($j = 1; $j <= 6; $j++){
      if($data['semester'] == $j){
        $arraymencukupi[$j-1] = round((($data['mencukupi']/($data['mencukupi']+$data['tidakmencukupi']))*100),2);
        $arraytidakmencukupi[$j-1] = round((($data['tidakmencukupi']/($data['mencukupi']+$data['tidakmencukupi']))*100),2);
      }
    }
    $i++;
  }
  $modname="laporankehadiranpersemester";  
?>

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Grafik Laporan Kehadiran per Semester</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?mod=home">Home</a></li>
          <li class="breadcrumb-item active">Grafik Laporan Per Semester</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="row">
  <div class="col-12">
    <div class="card">
      
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Grafik Laporan Kehadiran Per Semester</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
              <!-- /.card-body -->
    </div>
        <!-- /.card -->
  </div>
</div>