<?php
//? Connect a DB
$conn = mysqli_connect("localhost", "root", "", "dbupb");

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}



function addStudent($data)
{
	global $conn;

	$npm = htmlspecialchars($data["npm"]);
	$nama = htmlspecialchars($data["nama"]);
	$kelas = $data["kelas"];
	$prodi = $data["prodi"];

	$query = "INSERT INTO Mahasiswa
				VALUES
			('', '$npm', '$nama', '$kelas', '$prodi')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function addLecture($data)
{
	global $conn;

	$nid = htmlspecialchars($data["nid"]);
	$nama = htmlspecialchars($data["nama"]);
	$education = htmlspecialchars($data["education"]);
	$faculty = htmlspecialchars($data["faculty"]);
	$major = htmlspecialchars($data["major"]);

	$query = "INSERT INTO dosen
				VALUES
			('', '$nid', '$nama', '$education', '$faculty', '$major')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function addCourse($data)
{
	global $conn;

	$code = htmlspecialchars($data["code"]);
	$nama = htmlspecialchars($data["nama"]);
	$sks = ($data["sks"]);
	$category = ($data["kategori"]);

	$query = "INSERT INTO mata_kuliah
				VALUES
			('', '$code', '$nama', '$sks', '$category')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}



function deleteStudent($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function deleteLecture($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM dosen WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function deleteCourse($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM mata_kuliah WHERE id = $id");
	return mysqli_affected_rows($conn);
}



function updateStudent($data)
{
	global $conn;

	$id = $data["id"];
	$npm = $data["npm"];
	$nama = $data["nama"];
	$kelas = $data["kelas"];
	$prodi = $data["prodi"];

	$query = "UPDATE mahasiswa SET
				npm = '$npm',
				nama = '$nama',
				kelas = '$kelas',
				prodi = '$prodi'
			WHERE id = '$id'
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function updateLecture($data)
{
	global $conn;

	$id = $data["id"];
	$nid = htmlspecialchars($data["nid"]);
	$nama = htmlspecialchars($data["nama"]);
	$education = htmlspecialchars($data["education"]);
	$faculty = htmlspecialchars($data["faculty"]);
	$major = htmlspecialchars($data["major"]);

	$query = "UPDATE dosen SET
				nama = '$nama',
				nid = '$nid',
				pendidikan = '$education',
				fakultas = '$faculty',
				prodi = '$major'
			WHERE id = '$id'
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function updateCourse($data)
{
	global $conn;

	$id = $data["id"];
	$code = htmlspecialchars($data["code"]);
	$nama = htmlspecialchars($data["nama"]);
	$sks = ($data["sks"]);
	$category = ($data["kategori"]);

	$query = "UPDATE mata_kuliah SET 
				kode_matkul = '$code', 
				nama_matkul = '$nama', 
				sks = '$sks', 
				kategori = '$category' 
			WHERE id = '$id' 
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}




function register($data)
{
	global $conn;

	$fullName = $data["fullname"];
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
						alert('Username already existed!')
					</script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password', '$fullName')");

	return mysqli_affected_rows($conn);
}
