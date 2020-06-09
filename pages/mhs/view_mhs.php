<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <h1 class="m-0 text-dark">Student List</h1>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <a href="index.php?page=add_mhs" class="btn btn-primary btn-lg"><i class="fa fa-plus"></i></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NPM</th>
                  <th>Student Name</th>
                  <th>Class</th>
                  <th>Major</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 1;
                $mhs = query("SELECT * FROM mahasiswa");
                foreach ($mhs as $row) : ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['npm']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['kelas']; ?></td>
                    <td><?= $row['prodi']; ?></td>
                    <td class="text-center">
                      <a href="index.php?page=update_mhs&id=<?= $row["id"]; ?>" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a>
                      <a href="index.php?page=delete_mhs&id=<?= $row["id"]; ?>" onclick="return confirm('Are you sure want to delete this data ?');" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>

                <?php $i++;
                endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>