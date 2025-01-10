



  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"> Gurustaff</h1>
<div class=" mb-4">
    <a href="<?= site_url('gurustaff/create') ?>" class="btn btn-success btn-md px-4 rounded-pill">
        <i class="fas fa-plus-circle"></i> Tambah Gurustaff
    </a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Gambar</th>
                <th>Actions</th>
            </tr>
                </thead>
                <tbody>
            <?php foreach ($gurustaff as $staff): ?>
                <tr>
                    <td><?= $staff['nama'] ?></td>
                    <td><?= $staff['jabatan'] ?></td>
                    <td><img src="<?= base_url('uploads/gurustaff/'.$staff['gambar']) ?>" width="100" height="100"></td>
                    <td>
                        <a href="<?= site_url('gurustaff/edit/'.$staff['id']) ?>" class="btn btn-primary btn-sm border rounded-pill">
                        <i class="fas fa-edit"></i> Edit
                        <a href="<?= site_url('gurustaff/delete/'.$staff['id']) ?>" class="btn btn-danger btn-sm border rounded-pill">
                        <i class="fas fa-trash-alt"></i> Delete
                    </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
               
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->