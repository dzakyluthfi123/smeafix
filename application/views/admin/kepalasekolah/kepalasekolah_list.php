<?php if ($this->session->flashdata('message')): ?>
    <div class="alert alert-info">
        <?= $this->session->flashdata('message'); ?>
    </div>
<?php endif; ?>




  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"> Kepala sekolah</h1>
<div class=" mb-4">
    <a href="<?= site_url('kepalasekolah/create') ?>" class="btn btn-success btn-md px-4 rounded-pill">
        <i class="fas fa-plus-circle"></i> Tambah Kepala sekolah
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
            <th>Foto</th>
            <th>Aksi</th>
            </tr>
                </thead>
                <tbody>
        <?php foreach ($kepalasekolah as $sambutan): ?>
            <tr>
                <td><?= $sambutan['judul']; ?></td>
                <td><?= $sambutan['tanggal']; ?></td>
                <td>
                    <?php if ($sambutan['foto']): ?>
                        <img src="<?= base_url('uploads/kepalasekolah/' . $sambutan['foto']); ?>" alt="Foto Sambutan" width="100">
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?= base_url('kepalasekolah/form/' . $sambutan['slug']); ?>" class="btn btn-primary btn-sm border rounded-pill">
                    <i class="fas fa-edit"></i> Edit
                    <a href="<?= base_url('kepalasekolah/delete/' . $sambutan['slug']); ?>"  class="btn btn-danger btn-sm border rounded-pill" onclick="return confirm('Yakin ingin menghapus?')">
                    <i class="fas fa-trash-alt"></i> Hapus
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