<?php
  if (isset($_GET['id']) ) { 
    $id = $_GET['id']; 
    $row = mysqli_fetch_array ( mysqli_query($con,"SELECT * FROM matkul WHERE kode_matkul = '$id' "));
    if (isset($_POST['submitted'])) {
      foreach($_POST AS $key => $value) { $_POST[$key] = mysqli_real_escape_string($con,$value); } 
        $sql = "DELETE FROM matkul WHERE kode_matkul = '$id' ";
        $hasilkueri = mysqli_query($con,$sql) or die(mysqli_error($con)); 
        if($hasilkueri==1) {
            echo '  <div class="widget-content">
                  <div class="alert alert-success">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <i class="fa fa-ok-sign"></i><strong>Sukses!</strong> 
                    Data Mata Kuliah Dihapus.
                  </div>
                          </div>';
          } else {
            echo '  <div class="widget-content">
                  <div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <i class="fa fa-ban-circle"></i><strong>Terjadi Kesalahan!</strong> 
                    Maaf data mata kuliah gagal dihapus.
                  </div>
                          </div>';
          } 
      
        echo '<meta http-equiv="refresh" content="2;url=index.php?mod=matkul">'; 
        buatngosongindibawah();
    } 
?>

<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title">Formulir Delete Mata Kuliah</h3>
    </div>
              <!-- /.card-header -->
              <!-- form start -->
    <form role="form" method="post">
        <div class="card-body">
          <div class="form-group">
          <label for="exampleInputEmail1">Nama Mata Kuliah</label>
          <input  name="nama_matkul"
              type="text" 
              class="form-control" 
              id="exampleInputEmail1" 
              placeholder="Masukan Nama Mata Kuliah"
              value = "<?php echo $row['nama_matkul']; ?>"
              readonly
          >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Semester</label>
            <input  name="semester" 
                type="number" 
                class="form-control" 
                id="exampleInputPassword1" 
                placeholder="Masukan Semester"
                value = "<?php echo $row['semester']; ?>"
                readonly
            >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Bobot SKS</label>
            <input  name="bobot_sks" 
                type="number" 
                class="form-control" 
                id="exampleInputPassword1" 
                placeholder="Masukan Bobot SKS"
                value = "<?php echo $row['bobot_sks']; ?>"
                readonly
            >
          </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Delete</button>
            <input type="hidden" value="1" name="submitted" /> 
        </div>
    </form>
</div>

<?php } ?>
