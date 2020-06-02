<?php 
require 'functions.php';

// ? Get data from URL
$id = $_GET["id"];

// ? Query data Mahasiswa based on id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// ? Check if edit button has been clicked
if( isset($_POST["submit"]) ) {
	
	// ? Check is the data has been updated
	if( update($_POST) > 0 ) {
		echo "
			<script>
				alert('Data has been updated !');
				document.location.href = 'view_mhs.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data update failed!');
				document.location.href = 'view_mhs.php';
			</script>
		";
	}
}

?>
<?php include 'views\partials\header.php'; ?>


<?php include 'views\partials\navbar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Add Student</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  
  <!-- Main content -->
  <section class="content">
		<div class="container-lg">

			<form action="" method="POST" enctype="multipart/form-data">
				<input hidden name="id" value="<?= $mhs['id'] ?>" >
				<input hidden name="gambarLama" value="<?= $mhs["photo"]; ?>">
				
				<div class="form-group">
					<label for="name">Name</label>
					<input
						type="text"
						name="nama"
						class="form-control"
						id="name"
						placeholder="Enter Name"
						value="<?= $mhs['nama'] ?>"
						required
					/>
				</div>

				<div class="form-group">
					<label for="npm">NPM</label>
					<input
						type="number"
						name="npm"
						class="form-control"
						id="npm"
						placeholder="Enter NPM"
						value="<?= $mhs['npm'] ?>"
						required
					/>
				</div>

				<div class="form-group">
					<label for="address">Address</label>
					<input
						type="text"
						name="alamat"
						class="form-control"
						id="address"
						placeholder="Enter Address"
						value="<?= $mhs['alamat'] ?>"
						required
					/>
				</div>

				<div class="form-group">
					<label for="phone">Phone Number</label>
					<input
						type="text"
						name="hp"
						class="form-control"
						id="phone"
						placeholder="Enter Phone Number"
						value="<?= $mhs['hp'] ?>"
						required
					/>
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input
						type="text"
						name="email"
						class="form-control"
						id="email"
						placeholder="Enter Email"
						value="<?= $mhs['email'] ?>"
						required
					/>
				</div>

				<div class="form-group">
					<label for="image">Photo</label>
					<input
						type="file"
						name="photo"
						class="form-control-file"
						id="image"
					/>
				</div>
				<img src="img/mhs/<?= $mhs['photo'] ?>" alt="<?= $mhs['nama'] ?>" width="150">

				<br><br>
				<a href="./view_mhs.php" class="btn btn-secondary">Back</a>
				<button type="submit" name="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
  
  </section>
  <!-- /.content -->
</div>
<?php include 'views\partials\footer.php'; ?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>