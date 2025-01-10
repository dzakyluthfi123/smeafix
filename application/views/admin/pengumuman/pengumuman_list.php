



  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Pengumuman</h1>
<div class=" mb-4">
    <a href="<?= site_url('pengumuman/create') ?>" class="btn btn-success btn-md px-4 rounded-pill">
        <i class="fas fa-plus-circle"></i> Tambah Pengumuman
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
                <th>Isi</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
            <?php foreach ($pengumuman as $row): ?>
            <tr>
                <td><?= $row['judul'] ?></td>
                <td><?= substr($row['isi'], 0, 50) ?>...</td>
                <td><?= date('d F Y', strtotime($row['tanggal_mulai'])) ?></td>
                <td><?= date('d F Y', strtotime($row['tanggal_selesai'])) ?></td>
                <td class="text-center">
                    <a href="<?= site_url('pengumuman/edit/'.$row['slug']) ?>" class="btn btn-primary btn-sm border rounded-pill">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="<?= site_url('pengumuman/delete/'.$row['slug']) ?>" class="btn btn-danger btn-sm border rounded-pill" onclick="return confirm('Yakin ingin menghapus?')">
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