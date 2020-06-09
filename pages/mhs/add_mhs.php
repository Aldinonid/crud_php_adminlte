<?php
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

	// cek apakah data berhasil di tambahkan atau tidak
	if (addStudent($_POST) > 0) {
		echo "
			<script>
				alert('Data has been Added !');
				document.location.href = 'index.php?page=view_mhs';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data add failed !');
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
				<h1 class="m-0 text-dark">Add Student</h1>
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
					<label for="npm">NPM</label>
					<input type="number" name="npm" class="form-control" id="npm" placeholder="Enter NPM" required />
				</div>

				<div class="form-group">
					<label for="class">Class</label>
					<select class="form-control" name="class" id="class">
						<option value="Pagi">Pagi</option>
						<option value="Malam">Malam</option>
					</select>
				</div>

				<div class="form-group">
					<label for="major">Major</label>
					<select class="form-control" name="prodi" id="major">
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