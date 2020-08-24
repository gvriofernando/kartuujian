<?php
  if($mod == "modules/matkul/matkul"){
    $amatkul = "active";
    $ajadwal = "";
    $auser = "";
    $aabsensi = "";
    $amahasiswa = "";
    $laporankehadiran = "";
    $analisakehadiran = "";
    $aprint = "";
  }elseif ($mod == "modules/jadwal/jadwal") {
    $amatkul = "";
    $ajadwal = "active";
    $auser = "";
    $aabsensi = "";
    $amahasiswa = "";
    $laporankehadiran = "";
    $analisakehadiran = "";
    $aprint = "";
  }elseif ($mod == "modules/user/user") {
    $amatkul = "";
    $ajadwal = "";
    $auser = "active";
    $aabsensi = "";
    $amahasiswa = "";
    $laporankehadiran = "";
    $analisakehadiran = "";
    $aprint = "";
  }elseif ($mod == "modules/absensi/absensi") {
    $amatkul = "";
    $ajadwal = "";
    $auser = "";
    $aabsensi = "active";
    $amahasiswa = "";
    $laporankehadiran = "";
    $analisakehadiran = "";
    $aprint = "";
  }elseif ($mod == "modules/mahasiswa/mahasiswa") {
    $amatkul = "";
    $ajadwal = "";
    $auser = "";
    $aabsensi = "";
    $amahasiswa = "active";
    $laporankehadiran = "";
    $analisakehadiran = "";
    $aprint = "";
  }elseif ($mod == "moduleslaporankehadiranpersemester/laporankehadiranpersemester") {
    $amatkul = "";
    $ajadwal = "";
    $auser = "";
    $aabsensi = "";
    $amahasiswa = "";
    $laporankehadiran = "active";
    $analisakehadiran = "";
    $aprint = "";
  }elseif ($mod == "modules/analisakehadiranpersiswa/analisakehadiranpersiswa") {
    $amatkul = "";
    $ajadwal = "";
    $auser = "";
    $aabsensi = "";
    $amahasiswa = "";
    $laporankehadiran = "";
    $analisakehadiran = "active";
    $aprint = "";
  }elseif ($mod == "modules/printjadwal/printjadwal") {
    $amatkul = "";
    $ajadwal = "";
    $auser = "";
    $aabsensi = "";
    $amahasiswa = "";
    $laporankehadiran = "";
    $analisakehadiran = "";
    $aprint = "active";
  }else{
    $amatkul = "";
    $ajadwal = "";
    $auser = "";
    $aabsensi = "";
    $amahasiswa = "";
    $laporankehadiran = "";
    $analisakehadiran = "";
    $aprint = "";
  }
?>


  <aside class="main-sidebar sidebar-dark-primary elevation-4"><!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/logopoltekes.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Menu Utama</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="./index.php?mod=home" class="nav-link <?php echo $ahome; ?>" >
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
<?php if ($_SESSION['shakakses'] == 'admin') { ?>
              <li class="nav-item">
                <a href="./index.php?mod=user" class="nav-link <?php echo $auser; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?mod=mahasiswa" class="nav-link <?php echo $amahasiswa; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?mod=matkul" class="nav-link <?php echo $amatkul; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mata Kuliah</p>
                </a>
              </li>
<?php }  ?>
              <li class="nav-item">
                <a href="./index.php?mod=jadwal" class="nav-link <?php echo $ajadwal; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal Ujian</p>
                </a>
              </li>
<?php if ($_SESSION['shakakses'] == 'admin') { ?> 
              <li class="nav-item">
                <a href="./index.php?mod=absensi" class="nav-link <?php echo $aabsensi; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absensi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?mod=laporankehadiranpersemester" class="nav-link <?php echo $laporankehadiran; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Kehadiran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?mod=analisakehadiranpersiswa" class="nav-link <?php echo $analisakehadiran; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Analisa Kehadiran Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?mod=printjadwal" class="nav-link <?php echo $aprint; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Print Daftar Hadir</p>
                </a>
              </li>
<?php }  ?>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="./logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>