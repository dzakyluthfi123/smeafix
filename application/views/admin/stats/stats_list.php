
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"> Rombel</h1>
<div class=" mb-4">
    <a href="<?= site_url('stats/create') ?>" class="btn btn-success btn-md px-4 rounded-pill">
        <i class="fas fa-plus-circle"></i> Tambah Rombel
    </a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                <th>Jumlah Siswa</th>
                <th>Rombongan Belajar</th>
                <th>Kompetensi Keahlian</th>
                <th>Aksi</th>
            </tr>
                </thead>
                <tbody>
            <?php if (!empty($stats)): ?>
                <?php foreach ($stats as $stat): ?>
                    <tr>
                        <td><?= $stat->jumlah_siswa; ?></td>
                        <td><?= $stat->rombongan_belajar; ?></td>
                        <td><?= $stat->kompetensi_keahlian; ?></td>
                        <td>
                            <a href="<?= site_url('stats/edit/' . $stat->id); ?>"  class="btn btn-primary btn-sm border rounded-pill">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                            <a href="<?= site_url('stats/delete/' . $stat->id); ?>" class="btn btn-danger btn-sm border rounded-pill" onclick="return confirm('Yakin ingin menghapus?')">
                        <i class="fas fa-trash-alt"></i> Hapus
                    </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center text-muted">Tidak ada data statistik siswa ditemukan.</td>
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