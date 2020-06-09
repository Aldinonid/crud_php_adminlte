<?php
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

	// cek apakah data berhasil di tambahkan atau tidak
	if (addLecture($_POST) > 0) {
		echo "
			<script>
				alert('Data has been Added !');
				document.location.href = 'index.php?page=view_dosen';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data add failed !');
				document.location.href = 'index.php?page=view_dosen';
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
				<h1 class="m-0 text-dark">Add Lecturer</h1>
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
					<input type="text" name="nama" class="form-control" id="name" placeholder="Enter Name" required />
				</div>

				<div class="form-group">
					<label for="nid">NID</label>
					<input type="number" name="nid" class="form-control" id="nid" placeholder="Enter NID" required />
				</div>

				<div class="form-group">
					<label for="education">Education</label>
					<input type="text" name="education" class="form-control" id="education" placeholder="Enter Education" required />
				</div>

				<div class="form-group">
					<label for="fakultas">Faculty</label>
					<input type="text" name="faculty" class="form-control" id="fakultas" placeholder="Enter Faculty" required />
				</div>

				<div class="form-group">
					<label for="prodi">Major</label>
					<input type="text" name="major" class="form-control" id="prodi" placeholder="Enter Major" required />
				</div>

				<br><br>
				<a href="index.php?page=view_dosen" class="btn btn-secondary">Back</a>
				<button type="submit" name="submit" class="btn btn-primary">Save</button>
			</form>
		</div>

	</section>
	<!-- /.content -->
</div>