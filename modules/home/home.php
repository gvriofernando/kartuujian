<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">

      <div class="col-sm-6">
        <?php if ($_SESSION['shakakses'] == 'mhs') { ?>
        <h1 class="m-0 text-dark"><b>Home</b></h1>
        <?php } ?> 
      </div><!-- /.col -->
     
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?mod=home">Home</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
  <div class="col-lg-3 col-6">
    <!-- small card -->
<?php if ($_SESSION['shakakses'] == 'mhs') { ?>
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>Jadwal Ujian</h3>
      </div>
      <div class="icon">
        <i class="fas fa-chart-pie"></i>
      </div>
      <a href="jadwal_kuliah.php" class="small-box-footer">
        Print <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
<?php } ?>    
  </div>
</div>