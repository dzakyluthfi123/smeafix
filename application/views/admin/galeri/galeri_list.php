
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Galeri</h1>
<div class=" mb-4">
    <a href="<?= site_url('galeri/create') ?>" class="btn btn-success btn-md px-4 rounded-pill">
        <i class="fas fa-plus-circle"></i> Tambah Galeri
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
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
                    </tr>
                    <tbody>
            <?php if (!empty($galeri)): ?>
                <?php foreach ($galeri as $item): ?>
                    <tr>
                        <td><?= htmlspecialchars($item->id); ?></td>
                        <td><?= htmlspecialchars($item->judul); ?></td>
                        <td><?= htmlspecialchars($item->deskripsi); ?></td>
                        <td>
                            <?php if (!empty($item->img)): ?>
                                <img src="<?= base_url('uploads/galeri/' . $item->img); ?>" width="100" alt="Gambar Galeri">
                            <?php else: ?>
                                <span class="text-muted">Tidak ada gambar</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?= site_url('galeri/edit/' . $item->id); ?>" class="btn btn-primary btn-sm border rounded-pill mb-1">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                            <a href="<?= site_url('galeri/delete/' . $item->id); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus prestasi ini?');" class="btn btn-danger btn-sm border rounded-pill">
                            <i class="fas fa-trash-alt"></i> Hapus
                        </a>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center text-muted">Tidak ada data galeri yang ditemukan.</td>
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