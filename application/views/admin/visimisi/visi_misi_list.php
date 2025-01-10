


  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">VisiMisi</h1>
<div class=" mb-4">
    <a href="<?= site_url('visimisi/create') ?>" class="btn btn-success btn-md px-4 rounded-pill">
        <i class="fas fa-plus-circle"></i> Tambah VisiMisi
    </a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>ID</th>
                <th>Visi</th>
                <th>Misi</th>
                <th>Gambar</th>
                <th>Aksi</th>
                    </tr>
                    <tbody>
            <?php if (!empty($visi_misi)): ?>
                <?php foreach ($visi_misi as $item): ?>
                    <tr>
                        <td><?= htmlspecialchars($item['id']); ?></td>
                        <td><?= htmlspecialchars($item['visi']); ?></td>
                        <td><?= htmlspecialchars($item['misi']); ?></td>
                        <td>
                            <?php if (!empty($item['gambar'])): ?>
                                <img src="<?= base_url('uploads/' . $item['gambar']); ?>" alt="Gambar" width="50">
                            <?php else: ?>
                                <span>Tidak ada gambar</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?= base_url('visimisi/edit/' . $item['id']); ?>" class="btn btn-primary btn-sm border rounded-pill">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                            <a href="<?= base_url('visimisi/delete/' . $item['id']); ?>" class="btn btn-danger btn-sm border rounded-pill" onclick="return confirm('Yakin ingin menghapus?')">
                        <i class="fas fa-trash-alt"></i> Hapus
                    </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center text-muted">Tidak ada data visi & misi yang ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->