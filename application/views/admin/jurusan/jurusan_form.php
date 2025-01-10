<div class="container">
    <h1><?= isset($jurusan) ? 'Edit' : 'Tambah' ?> Jurusan</h1>
    <form action="<?= base_url('jurusan/save') ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= isset($jurusan) ? $jurusan['id'] : '' ?>">

        <div class="form-group">
            <label for="nama">Nama Jurusan</label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?= isset($jurusan) ? $jurusan['nama'] : '' ?>" required>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" required><?= isset($jurusan) ? $jurusan['deskripsi'] : '' ?></textarea>
        </div>

        <div class="form-group">
            <label for="logo">Logo</label>
            <input type="file" class="form-control" name="logo" id="logo" <?= isset($jurusan) ? '' : 'required' ?>>
            <?php if (isset($jurusan) && $jurusan['logo']): ?>
                <img src="<?= base_url('uploads/jurusan/' . $jurusan['logo']) ?>" width="100">
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="gambar" <?= isset($jurusan) ? '' : 'required' ?>>
            <?php if (isset($jurusan) && $jurusan['gambar']): ?>
                <img src="<?= base_url('uploads/jurusan/' . $jurusan['gambar']) ?>" width="100">
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-primary"><?= isset($jurusan) ? 'Update' : 'Simpan' ?></button>
    </form>
</div>
