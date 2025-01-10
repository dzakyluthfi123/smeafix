


  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"> Ekstrakurikuler</h1>
<div class=" mb-4">
    <a href="<?= site_url('ekstrakurikuler/form') ?>" class="btn btn-success btn-md px-4 rounded-pill">
        <i class="fas fa-plus-circle"></i> Tambah Ekstrakurikuler
    </a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                <th>Nama Ekstrakurikuler</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Pembimbing</th>
                <th>Aksi</th>
            </tr>
                </thead>
                <tbody>
            <?php foreach ($ekstrakurikuler as $item): ?>
            <tr>
                <td><?= $item->nama_ekstra; ?></td>
                <td><?= substr($item->deskripsi, 0, 50); ?>...</td>
                <td>
                    <img src="<?= base_url('uploads/ekstrakurikuler/' . $item->gambar); ?>" width="100">
                </td>
                <td><?= $item->pembimbing; ?></td>
                <td class="text-center">
                    <!-- Tombol Edit -->
                    <a href="<?= base_url('ekstrakurikuler/form/' . $item->slug); ?>" class="btn btn-primary btn-sm border rounded-pill">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <!-- Tombol Delete -->
                    <a href="<?= base_url('ekstrakurikuler/delete/' . $item->slug); ?>" 
                       onclick="return confirm('Apakah Anda yakin ingin menghapus ekstrakurikuler ini?');" 
                       class="btn btn-danger btn-sm border rounded-pill">
                        <i class="fas fa-trash-alt"></i> Delete
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