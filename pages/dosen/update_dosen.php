<?php
// ? Get data from URL
$id = $_GET["id"];

// ? Query data Mahasiswa based on id
$dosen = query("SELECT * FROM dosen WHERE id = $id")[0];


// ? Check if edit button has been clicked
if (isset($_POST["submit"])) {

	// ? Check is the data has been updated
	if (updateLecture($_POST) > 0) {
		echo "
			<script>
				alert('Data has been updated !');
				document.location.href = 'index.php?page=view_dosen';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data update failed!');
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
				<h1 class="m-0 text-dark">Edit Lecturer</h1>
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-lg">

			<form action="" method="POST" enctype="multipart/form-data">
				<input hidden name="id" value="<?= $dosen['id']; ?>">

				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="nama" class="form-control" id="name" placeholder="Enter Name" value="<?= $dosen['nama']; ?>" required />
				</div>

				<div class="form-group">
					<label for="nid">NID</label>
					<input type="number" name="nid" class="form-control" id="nid" placeholder="Enter NID" value="<?= $dosen['nid']; ?>" required />
				</div>

				<div class="form-group">
					<label for="education">Education</label>
					<input type="text" name="education" class="form-control" id="education" placeholder="Enter Education" value="<?= $dosen['pendidikan']; ?>" required />
				</div>

				<div class="form-group">
					<label for="fakultas">Faculty</label>
					<input type="text" name="faculty" class="form-control" id="fakultas" placeholder="Enter Faculty" value="<?= $dosen['fakultas']; ?>" required />
				</div>

				<div class="form-group">
					<label for="prodi">Major</label>
					<input type="text" name="major" class="form-control" id="prodi" placeholder="Enter Major" value="<?= $dosen['prodi']; ?>" required />
				</div>

				<br><br>
				<a href="index.php?page=view_dosen" class="btn btn-secondary">Back</a>
				<button type="submit" name="submit" class="btn btn-primary">Save</button>
			</form>
		</div>

	</section>
	<!-- /.content -->
</div>