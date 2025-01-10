





  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"> Jurusan</h1>
<div class=" mb-4">
    <a href="<?= site_url('jurusan/form') ?>" class="btn btn-success btn-md px-4 rounded-pill">
        <i class="fas fa-plus-circle"></i> Tambah Jurusan
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
                <th>Deskripsi</th>
                <th>Logo</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
                </thead>
                <tbody>
            <?php foreach ($jurusan as $j): ?>
                <tr>
                    <td><?= $j->nama ?></td> <!-- Ubah [] menjadi -> -->
                    <td><?= $j->deskripsi ?></td> <!-- Ubah [] menjadi -> -->
                    <td><img src="<?= base_url('uploads/jurusan/' . $j->logo) ?>" width="50"></td> <!-- Ubah [] menjadi -> -->
                    <td><img src="<?= base_url('uploads/jurusan/' . $j->gambar) ?>" width="50"></td> <!-- Ubah [] menjadi -> -->
                    <td>
                        <a href="<?= base_url('jurusan/form/' . $j->id) ?>"  class="btn btn-primary btn-sm border rounded-pill">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                        <a href="<?= base_url('jurusan/delete/' . $j->id) ?>"class="btn btn-danger btn-sm border rounded-pill" onclick="return confirm('Yakin ingin menghapus?')">
                        <i class="fas fa-trash-alt"></i> Hapus
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