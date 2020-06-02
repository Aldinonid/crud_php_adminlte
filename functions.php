<?php 
// ? Connect a DB
$conn = mysqli_connect("localhost", "root", "", "dbupb");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function add($data) {
	global $conn;

	$npm = htmlspecialchars($data["npm"]);
	$nama = htmlspecialchars($data["nama"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$hp = htmlspecialchars($data["hp"]);
	$email = htmlspecialchars($data["email"]);

	// ? Upload photo
	$photo = upload();
	if( !$photo ) {
		return false;
	}

	$query = "INSERT INTO Mahasiswa
				VALUES
			('', '$npm', '$nama', '$alamat', '$hp', '$email', '$photo')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload() {
	$namaFile = $_FILES['photo']['name'];
	$ukuranFile = $_FILES['photo']['size'];
	$error = $_FILES['photo']['error'];
	$tmpName = $_FILES['photo']['tmp_name'];

	// ? Check is there any photo uploaded
	if( $error === 4 ) {
		echo "<script>
						alert('Select a Picture');
			  	</script>";
		return false;
	}

	// ? Check is the uploaded file == picture
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
						alert('You're not upload a image file!');
			  	</script>";
		return false;
	}

	// ? Success upload, add image
	// ? Generate new filename
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/mhs/' . $namaFileBaru);

	return $namaFileBaru;
}


function delete($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function update($data) {
	global $conn;

	$id = $data["id"];
	$npm = htmlspecialchars($data["npm"]);
	$nama = htmlspecialchars($data["nama"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$hp = htmlspecialchars($data["hp"]);
	$email = htmlspecialchars($data["email"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);
	
	// ? Check is the uploaded file is a new data
	if( $_FILES['photo']['error'] === 4 ) {
		$photo = $gambarLama;
	} else {
		$photo = upload();
	}
	

	$query = "UPDATE Mahasiswa SET
				npm = '$npm',
				nama = '$nama',
				alamat = '$alamat',
				hp = '$hp',
				email = '$email',
				photo = '$photo'
			WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}
?>