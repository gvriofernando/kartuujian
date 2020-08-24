<?php
	if (isset($_GET['id']) ) { 
		$id = $_GET['id']; 
		$row = mysqli_fetch_array ( mysqli_query($con,"SELECT * FROM user WHERE username = '$id' "));
		$hakaksess = $row['hakakses'];
		$kelass = $row['kelas'];
		$tahun_akademiks = $row['tahunakademik'];
		$semesters = $row['semester'];
		$pas=md5($_POST['password']);
			if($_POST["password"] == $row["password"]){
				$rubahpas = "," ;
			} else {
				$rubahpas = ",password='$pas'," ;
			}
	
		if (isset($_POST['submitted'])) {
			$paseword = MD5($_POST['password']) ;
			foreach($_POST AS $key => $value) { $_POST[$key] = mysqli_real_escape_string($con,$value); } 
				$sql = "UPDATE user set 	username            ='{$_POST['username']}'".$rubahpas."
											nama               	='{$_POST['nama']}',
											hakakses            ='{$_POST['hak_akses']}',
											kelas            	='{$_POST['kelas']}', 
											tahunakademik      ='{$_POST['tahun_akademik']}',
											semester 			='{$_POST['semester']}'
									WHERE 	username='$id'";
				$hasilkueri = mysqli_query($con,$sql) or die(mysqli_error($con)); 
				if($hasilkueri==1) {
						echo ' 	<div class="widget-content">
									<div class="alert alert-success">
					                    <button type="button" class="close" data-dismiss="alert">&times;</button>
					                    <i class="fa fa-ok-sign"></i><strong>Sukses!</strong> 
										Data User Diupdate.
									</div>
			                  	</div>';
					} else {
						echo '	<div class="widget-content">
									<div class="alert alert-danger">
					                    <button type="button" class="close" data-dismiss="alert">&times;</button>
					                    <i class="fa fa-ban-circle"></i><strong>Terjadi Kesalahan!</strong> 
										Maaf data user gagal diupdate.
									</div>
			                  	</div>';
					} 
			
				echo '<meta http-equiv="refresh" content="2;url=index.php?mod=user">'; 
				buatngosongindibawah();
		}
	if($kelass == "A"){
		$kelasa = "selected";
		$kelasb = "";
	}else if($kelass == "B"){
		$kelasa = "";
		$kelasb = "selected";
	}else{
		$kelasa = "";
		$kelasb = "";
	}

	if($tahun_akademiks == "2016"){
		$t2016 = "selected";
		$t2017 = "";
		$t2018 = "";
		$t2019 = "";
		$t2020 = "";
		$t2021 = "";
		$t2022 = "";
	}else if($tahun_akademiks == "2017"){
		$t2016 = "";
		$t2017 = "selected";
		$t2018 = "";
		$t2019 = "";
		$t2020 = "";
		$t2021 = "";
		$t2022 = "";
	}else if($tahun_akademiks == "2018"){
		$t2016 = "";
		$t2017 = "";
		$t2018 = "selected";
		$t2019 = "";
		$t2020 = "";
		$t2021 = "";
		$t2022 = "";
	}else if($tahun_akademiks == "2019"){
		$t2016 = "";
		$t2017 = "";
		$t2018 = "";
		$t2019 = "selected";
		$t2020 = "";
		$t2021 = "";
		$t2022 = "";
	}else if($tahun_akademiks == "2020"){
		$t2016 = "";
		$t2017 = "";
		$t2018 = "";
		$t2019 = "";
		$t2020 = "selected";
		$t2021 = "";
		$t2022 = "";
	}else if($tahun_akademiks == "2021"){
		$t2016 = "";
		$t2017 = "";
		$t2018 = "";
		$t2019 = "";
		$t2020 = "";
		$t2021 = "selected";
		$t2022 = "";
	}else if($tahun_akademiks == "2022"){
		$t2016 = "";
		$t2017 = "";
		$t2018 = "";
		$t2019 = "";
		$t2020 = "";
		$t2021 = "";
		$t2022 = "selected";
	}else{
		$t2016 = "";
		$t2017 = "";
		$t2018 = "";
		$t2019 = "";
		$t2020 = "";
		$t2021 = "";
		$t2022 = "";
	}

	if($semesters == "1"){
		$s1 = "selected";
		$s2 = "";
		$s3 = "";
		$s4 = "";
		$s5 = "";
		$s6 = "";
		$s7 = "";
	}else if($semesters == "2"){
		$s1 = "";
		$s2 = "selected";
		$s3 = "";
		$s4 = "";
		$s5 = "";
		$s6 = "";
		$s7 = "";
	}else if($semesters == "3"){
		$s1 = "";
		$s2 = "";
		$s3 = "selected";
		$s4 = "";
		$s5 = "";
		$s6 = "";
		$s7 = "";
	}else if($semesters == "4"){
		$s1 = "";
		$s2 = "";
		$s3 = "";
		$s4 = "selected";
		$s5 = "";
		$s6 = "";
		$s7 = "";
	}else if($semesters == "5"){
		$s1 = "";
		$s2 = "";
		$s3 = "";
		$s4 = "";
		$s5 = "selected";
		$s6 = "";
		$s7 = "";
	}else if($semesters == "6"){
		$s1 = "";
		$s2 = "";
		$s3 = "";
		$s4 = "";
		$s5 = "";
		$s6 = "selected";
		$s7 = "";
	}else if($semesters == "7"){
		$s1 = "";
		$s2 = "";
		$s3 = "";
		$s4 = "";
		$s5 = "";
		$s6 = "";
		$s7 = "selected";
	}else{
		$s1 = "";
		$s2 = "";
		$s3 = "";
		$s4 = "";
		$s5 = "";
		$s6 = "";
		$s7 = "";
	}
		
?>

<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Formulir Edit User</h3>
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
              value ="<?php echo $id; ?>"
              readonly
          >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input  name="password" 
                type="password" 
                class="form-control" 
                id="exampleInputPassword1" 
                placeholder="Password"
          		value = "<?php echo $row['password']; ?>"
            >
          </div>
          <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input  name="nama"
              type="text" 
              class="form-control" 
              id="exampleInputEmail1" 
              placeholder="Masukan Nama"
              value = "<?php echo $row['nama']; ?>"
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
              <option value="A" <?php echo $kelasa; ?>>A</option>
              <option value="B" <?php echo $kelasb; ?>>B</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tahun Akademik</label>
            <select class="form-control" name="tahun_akademik">
              <option value="2016" <?php echo $t2016; ?>>2016</option>
              <option value="2017" <?php echo $t2017; ?>>2017</option>
              <option value="2018" <?php echo $t2018; ?>>2018</option>
              <option value="2019" <?php echo $t2019; ?>>2019</option>
              <option value="2020" <?php echo $t2020; ?>>2020</option>
              <option value="2021" <?php echo $t2021; ?>>2021</option>
              <option value="2022" <?php echo $t2022; ?>>2022</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Semester</label>
            <select class="form-control" name="semester">
              <option value="1" <?php echo $s1; ?>>1</option>
              <option value="2" <?php echo $s2; ?>>2</option>
              <option value="3" <?php echo $s3; ?>>3</option>
              <option value="4" <?php echo $s4; ?>>4</option>
              <option value="5" <?php echo $s5; ?>>5</option>
              <option value="6" <?php echo $s6; ?>>6</option>
              <option value="7" <?php echo $s7; ?>>7</option>
            </select>
          </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Edit</button>
            <input type="hidden" value="1" name="submitted" /> 
        </div>
    </form>
</div>
<?php } ?>
