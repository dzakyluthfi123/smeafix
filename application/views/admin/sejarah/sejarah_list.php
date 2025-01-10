

  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"> Sejarah</h1>
<div class=" mb-4">
    <a href="<?= site_url('sejarah/create') ?>" class="btn btn-success btn-md px-4 rounded-pill">
        <i class="fas fa-plus-circle"></i> Tambah Sejarah
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
                <th>Konten</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
                </thead>
                <tbody>
            <?php if (!empty($sejarah)): ?>
                <?php foreach ($sejarah as $item): ?>
                    <tr>
                        <td><?= $item['judul']; ?></td>
                        <td><?= substr($item['konten'], 0, 50) . '...'; ?></td> 
                        <td>
                            <?php if ($item['gambar']): ?>
                                <img src="<?= base_url('uploads/' . $item['gambar']); ?>" width="100" alt="<?= $item['judul']; ?>" style="border-radius: 8px;">
                            <?php else: ?>
                                <span class="text-muted">No Image</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?= base_url('sejarah/edit/' . $item['id']); ?>" class="btn btn-primary btn-sm border rounded-pill">
                            <i class="fas fa-edit"></i> Edit </a>
                            <a href="<?= base_url('sejarah/delete/' . $item['id']); ?>" class="btn btn-danger btn-sm border rounded-pill">
                            <i class="fas fa-trash-alt"></i> Delete
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center text-muted">Tidak ada sejarah ditemukan.</td>
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