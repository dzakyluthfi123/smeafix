







  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Info Ppdb</h1>
<div class=" mb-4">
    <a href="<?= site_url('admin/infoppdb/create') ?>" class="btn btn-success btn-md px-4 rounded-pill">
        <i class="fas fa-plus-circle"></i> Tambah Info Ppdb
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
                <th>Action</th>
            </tr>
                </thead>
                <tbody>
            <?php if (!empty($info_ppdb)): ?>
                <?php foreach ($info_ppdb as $info): ?>
                    <tr>
                        <td><?= $info->title ?></td>
                        <td><?= substr($info->description, 0, 50) . '...' ?></td>
                        <td>
                            <?php if (!empty($info->image)): ?>
                                <img src="<?= base_url('uploads/' . $info->image) ?>" width="100" alt="<?= $info->title ?>" style="border-radius: 8px;">
                            <?php else: ?>
                                <span class="text-muted">No Image</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?= site_url('InfoPpdb/edit/' . $info->id) ?>"  class="btn btn-primary btn-sm border rounded-pill">
                            <i class="fas fa-edit"></i>Edit</a>
                            <a href="<?= site_url('InfoPpdb/delete/' . $info->id) ?>" class="btn btn-danger btn-sm border rounded-pill" onclick="return confirm('Yakin ingin menghapus?')">
                        <i class="fas fa-trash-alt"></i> Hapus
                    </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center text-muted">Tidak ada Info PPDB ditemukan.</td>
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