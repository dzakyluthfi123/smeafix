
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"> Kontak</h1>
<div class=" mb-4">
    <a href="<?= site_url('kontak/add') ?>" class="btn btn-success btn-md px-4 rounded-pill">
        <i class="fas fa-plus-circle"></i> Tambah Kontak
    </a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Maps URL</th>
                <th>Aksi</th>
            </tr>
                </thead>
                <tbody>
            <?php if (!empty($kontak)): ?>
                <?php foreach ($kontak as $k): ?>
                    <tr>
                        <td><?php echo $k->alamat; ?></td>
                        <td><?php echo $k->telepon; ?></td>
                        <td><?php echo $k->email; ?></td>
                        <td>
                            <a href="<?php echo $k->maps_url; ?>" target="_blank" class="btn btn-link">Lihat Peta</a>
                        </td>
                        <td>
                            <a href="<?php echo site_url('kontak/edit/' . $k->id); ?>" class="btn btn-primary btn-sm border rounded-pill">
                            <i class="fas fa-edit"></i> Edit </a>
                            <a href="<?php echo site_url('kontak/delete/' . $k->id); ?>"class="btn btn-danger btn-sm border rounded-pill">
                        <i class="fas fa-trash-alt"></i> Delete
                    </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center text-muted">Tidak ada data kontak ditemukan.</td>
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