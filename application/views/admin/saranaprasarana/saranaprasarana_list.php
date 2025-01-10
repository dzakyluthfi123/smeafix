
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">saranaprasarana</h1>
<div class=" mb-4">
    <a href="<?= site_url('saranaprasarana/create') ?>" class="btn btn-success btn-md px-4 rounded-pill">
        <i class="fas fa-plus-circle"></i> Tambah saranaprasarana
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
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Aksi</th>
                    </tr>
                    <tbody>
            <?php if (!empty($sarana)): ?>
                <?php foreach ($sarana as $item): ?>
                    <tr>
                        <td><?= htmlspecialchars($item->nama); ?></td>
                        <td><?= htmlspecialchars($item->jumlah); ?></td>
                        <td><?= htmlspecialchars($item->keterangan); ?></td>
                        <td>
                            <a href="<?= site_url('saranaprasarana/edit/' . $item->id) ?>" class="btn btn-primary btn-sm border rounded-pill mb-1">
                            <i class="fas fa-edit"></i> Edit
                            <a href="<?= site_url('saranaprasarana/delete/' . $item->id) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus prestasi ini?');" class="btn btn-danger btn-sm border rounded-pill">
                            <i class="fas fa-trash-alt"></i> Hapus
                        </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center text-muted">Tidak ada data sarana prasarana yang ditemukan.</td>
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