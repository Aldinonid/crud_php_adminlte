<?php
// ? Get data from URL
$id = $_GET["id"];

// ? Query data Mahasiswa based on id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// ? Check if edit button has been clicked
if (isset($_POST["submit"])) {

	// ? Check is the data has been updated
	if (updateStudent($_POST) > 0) {
		echo "
			<script>
				alert('Data has been updated !');
				document.location.href = 'index.php?page=view_mhs';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data update failed!');
				document.location.href = 'index.php?page=view_mhs';
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
				<h1 class="m-0 text-dark">Edit Student</h1>
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-lg">

			<form action="" method="POST" enctype="multipart/form-data">
				<input hidden name="id" value="<?= $mhs['id'] ?>">

				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="nama" class="form-control" id="name" placeholder="Enter Name" value="<?= $mhs['nama'] ?>" required />
				</div>

				<div class="form-group">
					<label for="npm">NPM</label>
					<input type="number" name="npm" class="form-control" id="npm" placeholder="Enter NPM" value="<?= $mhs['npm'] ?>" required />
				</div>

				<div class="form-group">
					<label for="class">Class</label>
					<select class="form-control" name="kelas" id="class">
						<option value="<?= $mhs['kelas']; ?>"><?= $mhs['kelas']; ?></option>
						<option value="Pagi">Pagi</option>
						<option value="Malam">Malam</option>
					</select>
				</div>

				<div class="form-group">
					<label for="major">Major</label>
					<select class="form-control" name="prodi" id="major">
						<option value="<?= $mhs['prodi']; ?>"><?= $mhs['prodi']; ?></option>
						<option value="Sistem Informasi">Sistem Informasi</option>
						<option value="Manajemen">Manajemen</option>
						<option value="Sastra Inggris">Sastra Inggris</option>
					</select>
				</div>

				<br><br>
				<a href="index.php?page=view_mhs" class="btn btn-secondary">Back</a>
				<button type="submit" name="submit" class="btn btn-primary">Save</button>
			</form>
		</div>

	</section>
	<!-- /.content -->
</div>