<?php
// ? Get data from URL
$id = $_GET["id"];

// ? Query data Mahasiswa based on id
$matkul = query("SELECT * FROM mata_kuliah WHERE id = $id")[0];


// ? Check if edit button has been clicked
if (isset($_POST["submit"])) {

	// ? Check is the data has been updated
	if (updateCourse($_POST) > 0) {
		echo "
			<script>
				alert('Data has been updated !');
				document.location.href = 'index.php?page=view_matkul';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data update failed!');
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
				<h1 class="m-0 text-dark">Edit Course</h1>
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-lg">

			<form action="" method="POST" enctype="multipart/form-data">
				<input hidden name="id" value="<?= $matkul['id'] ?>">

				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="nama" class="form-control" id="name" placeholder="Enter Course Name" value="<?= $matkul['nama_matkul'] ?>" required />
				</div>

				<div class="form-group">
					<label for="code">Code</label>
					<input type="number" name="code" class="form-control" id="code" placeholder="Enter Course Code" value="<?= $matkul['kode_matkul'] ?>" required />
				</div>

				<div class="form-group">
					<label for="sks">SKS</label>
					<select class="form-control" name="sks" id="sks">
						<option value="<?= $matkul['sks']; ?>"><?= $matkul['sks']; ?></option>
						<option value="2">2</option>
						<option value="4">4</option>
						<option value="6">6</option>
					</select>
				</div>

				<div class="form-group">
					<label for="category">Category</label>
					<select class="form-control" name="kategori" id="category">
						<option value="<?= $matkul['kategori']; ?>"><?= $matkul['kategori']; ?></option>
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