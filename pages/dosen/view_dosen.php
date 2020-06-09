<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <h1 class="m-0 text-dark">Lecturer List</h1>
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
            <a href="index.php?page=add_dosen" class="btn btn-primary btn-lg"><i class="fa fa-plus"></i></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NID</th>
                  <th>Lecturer Name</th>
                  <th>Education</th>
                  <th>Faculty</th>
                  <th>Major</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 1;
                $dosen = query("SELECT * FROM dosen");
                foreach ($dosen as $row) : ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['nid']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['pendidikan']; ?></td>
                    <td><?= $row['fakultas']; ?></td>
                    <td><?= $row['prodi']; ?></td>
                    <td class="text-center">
                      <a href="index.php?page=update_dosen&id=<?= $row["id"]; ?>" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a>
                      <a href="index.php?page=delete_dosen&id=<?= $row["id"]; ?>" onclick="return confirm('Are you sure want to delete this data ?');" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
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