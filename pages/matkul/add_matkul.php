<?php
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

	// cek apakah data berhasil di tambahkan atau tidak
	if (addCourse($_POST) > 0) {
		echo "
			<script>
				alert('Data has been Added !');
				document.location.href = 'index.php?page=view_matkul';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data add failed !');
				document.location.href = 'index.php?page=view_matkul';
			</script>
		";
	}
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row">
				<h1 class="m-0 text-dark">Add Course</h1>
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-lg">

			<form action="" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="nama" class="form-control" id="name" placeholder="Enter Course Name" required />
				</div>

				<div class="form-group">
					<label for="code">Code</label>
					<input type="number" name="code" class="form-control" id="code" placeholder="Enter Course Code" required />
				</div>

				<div class="form-group">
					<label for="sks">SKS</label>
					<select class="form-control" name="sks" id="sks">
						<option value="2">2</option>
						<option value="4">4</option>
						<option value="6">6</option>
					</select>
				</div>

				<div class="form-group">
					<label for="category">Category</label>
					<select class="form-control" name="kategori" id="category">
						<option value="Mandatory">Mandatory</option>
						<option value="Support">Support</option>
					</select>
				</div>

				<br><br>
				<a href="index.php?page=view_matkul" class="btn btn-secondary">Back</a>
				<button type="submit" name="submit" class="btn btn-primary">Save</button>
			</form>
		</div>

	</section>
	<!-- /.content -->
</div>