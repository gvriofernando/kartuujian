<?php
  $sql = "SELECT 
            a.nim_mahasiswa,
            b.nama, 
            b.semester,
            COUNT(CASE WHEN keterangan ='Mencukupi' THEN 1 END) as mencukupi, 
            COUNT(CASE WHEN keterangan ='Tidak Mencukupi' THEN 1 END) as tidakmencukupi,
            SUM(a.jumlah_absensi) as jumlah_absen
          FROM 
            absensi a, 
            user b 
          WHERE 
            a.nim_mahasiswa = b.username 
          GROUP BY a.nim_mahasiswa";
  $result = mysqli_query($con,$sql);
  $modname="analisakehadiranpersiswa";  
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Tabel Data Laporan Analisa Kehadiran per Siswa</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?mod=home">Home</a></li>
          <li class="breadcrumb-item active">Tabel Data Laporan Analisa Kehadiran per Siswa</li>
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
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th width="20">No</th>
              <th>NIM</th>
              <th>Nama Mahasiswa</th>
              <th>Semester</th>
              <th>Jumlah Mencukupi</th>
              <th>Persentase Mencukupi</th>
              <th>Jumlah Tidak Mencukupi</th>
              <th>Persentase Tidak Mencukupi</th>
              <th>Jumlah Kehadiran</th>
              <th>Persentase Kehadiran</th>
            </tr>
          </thead>
          <tbody>
            <?php
                $i=1;
                while($data = mysqli_fetch_array($result)){
            ?>    
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['nim_mahasiswa'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['semester'] ?></td>
                <td><?php echo $data['mencukupi'] ?></td>
                <td><?php echo round(($data['mencukupi']/( $data['mencukupi'] + $data['tidakmencukupi'])) *100, 2)  ?>%</td>
                <td><?php echo $data['tidakmencukupi'] ?></td>
                <td><?php echo round(($data['tidakmencukupi']/( $data['mencukupi'] + $data['tidakmencukupi'])) *100 , 2) ?>%</td>
                <td><?php echo $data['jumlah_absen'] ?></td>
                <td>
                    <?php
                        if($data['semester'] == "1"){
                           echo round($data['jumlah_absen']/126*100);
                        }else if($data['semester'] == "2"){
                           echo round($data['jumlah_absen']/126*100);
                        }else if($data['semester'] == "3"){
                           echo round($data['jumlah_absen']/112*100);
                        }else if($data['semester'] == "4"){
                           echo round($data['jumlah_absen']/70*100);
                        }else if($data['semester'] == "5"){
                           echo round($data['jumlah_absen']/84*100);
                        }else if($data['semester'] == "2"){
                           echo round($data['jumlah_absen']/56*100);
                        }else{
                            echo "Error";
                        }
                    ?>%
                </td>
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