<?php 
include 'functions.php'

?>

<!DOCTYPE html>
<html>

<head>
  <title>Halaman Menampilkan Data Mahasiswa</title>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <center>
      <h2>Membuat Pagination PHP, MySQLI dan Boostrap 4</h2>
    </center>
    <br>
    <a class="btn btn-outline-primary" href="add.php" role="button">Tambah Mahasiswa</a>
    <hr>

    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>NO</th>
          <th>NPM</th>
          <th>Nama Mahasiswa</th>
          <th>Alamat Mahasiswa</th>
          <th>No HP</th>
          <th>Email</th>
          <th>Photo</th>
          <th width="180">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
				$batas = 10;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

				$previous = $halaman - 1;
				$next = $halaman + 1;
				
				$data = mysqli_query($conn,"select * from mahasiswa");
				$jumlah_data = mysqli_num_rows($data);
				$total_halaman = ceil($jumlah_data / $batas);

				$data_mahasiswa = mysqli_query($conn,"select * from mahasiswa limit $halaman_awal, $batas");
        $nomor = $halaman_awal+1;
        $i = 1;
				while($d = mysqli_fetch_array($data_mahasiswa)){
					?>
        <tr>
          <td><?=$i; ?></td>
          <td><?=$d['npm']; ?></td>
          <td><?=$d['nama']; ?></td>
          <td><?=$d['alamat']; ?></td>
          <td><?=$d['hp']; ?></td>
          <td><?=$d['email']; ?></td>
          <td><img src="img/mhs/<?= $d['photo']; ?>" alt="" width="50"></td>
          <td>
            <a class="btn btn-outline-dark" href="update.php?id=<?= $d["id"]; ?>">Edit</a> |
            <a class="btn btn-outline-danger" href="delete.php?id=<?= $d["id"]; ?>" onclick="return confirm('Are you sure want to delete this data?');">Delete</a>
          </td>
        </tr>
        <?php
        $i++;
				}
				?>
      </tbody>
    </table>
    <nav>
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$Previous'"; } ?>>Previous</a>
        </li>
        <?php 
				for($x=1;$x<=$total_halaman;$x++){
					?>
        <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
        <?php
				}
				?>
        <li class="page-item">
          <a class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
        </li>
      </ul>
    </nav>
  </div>
</body>

</html>