



  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Prestasi</h1>
<div class=" mb-4">
    <a href="<?= site_url('prestasi/create') ?>" class="btn btn-success btn-md px-4 rounded-pill">
        <i class="fas fa-plus-circle"></i> Tambah Prestasi
    </a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>Judul</th>
            <th>Tanggal</th>
            <th>Penulis</th>
            <th>Gambar</th>
            <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
        <?php foreach ($prestasi as $p): ?>
            <tr>
                <td><?= $p->judul; ?></td>
                <td><?= $p->tanggal; ?></td>
                <td><?= $p->penulis; ?></td>
                <td> <img src="<?= base_url('uploads/prestasi/' . $p->gambar); ?>" alt="<?= $p->judul; ?>" class="img-fluid rounded" width="100"></td>
                <td>
                <a href="<?= base_url('prestasi/edit/' . $p->slug); ?>" class="btn btn-primary btn-sm border rounded-pill mb-1">
                            <i class="fas fa-edit"></i> Edit
                        </a>

                        <!-- Tombol Delete -->
                        <a href="<?= base_url('prestasi/delete/' . $p->slug); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus prestasi ini?');" class="btn btn-danger btn-sm border rounded-pill">
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