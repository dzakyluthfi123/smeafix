




  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Berita</h1>
<div class=" mb-4">
    <a href="<?= site_url('berita/form') ?>" class="btn btn-success btn-md px-4 rounded-pill">
        <i class="fas fa-plus-circle"></i> Tambah Berita
    </a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th class="border-right">Judul</th>
                    <th class="border-right">Konten</th>
                    <th class="border-right">Penulis</th>
                    <th class="border-right">Tanggal</th>
                    <th class="border-right">Foto</th>
                    <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($berita as $item): ?>
                <tr class="align-middle">
                    <td class="border-right">
                        <a href="<?= base_url('berita/form/' . $item->slug); ?>" class="text-decoration-none text-info">
                            <?= $item->judul; ?>
                        </a>
                    </td>
                    <td class="border-right"><?= substr($item->konten, 0, 100); ?>...</td>
                    <td class="border-right"><?= $item->penulis; ?></td>
                    <td class="border-right"><?= date('d F Y', strtotime($item->tanggal)); ?></td>
                    <td class="border-right">
                        <!-- Display Image -->
                        <img src="<?= base_url('uploads/berita/' . $item->img); ?>" alt="<?= $item->judul; ?>" class="img-fluid rounded" width="100">
                    </td>
                    <td class="text-center">
                        <!-- Tombol Edit -->
                        <a href="<?= base_url('berita/form/' . $item->slug); ?>" class="btn btn-primary btn-sm border rounded-pill mb-1">
                            <i class="fas fa-edit"></i> Edit
                        </a>

                        <!-- Tombol Delete -->
                        <a href="<?= base_url('berita/delete/' . $item->slug); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?');" class="btn btn-danger btn-sm border rounded-pill">
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