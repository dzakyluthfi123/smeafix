<form action="<?= current_url(); ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" class="form-control" value="<?= set_value('judul', isset($prestasi) ? $prestasi->judul : ''); ?>" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" class="form-control" required><?= set_value('deskripsi', isset($prestasi) ? $prestasi->deskripsi : ''); ?></textarea>
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= set_value('tanggal', isset($prestasi) ? $prestasi->tanggal : ''); ?>" required>
    </div>
    <div class="form-group">
        <label for="penulis">Penulis</label>
        <input type="text" name="penulis" id="penulis" class="form-control" value="<?= set_value('penulis', isset($prestasi) ? $prestasi->penulis : ''); ?>" required>
    </div>
    <div class="form-group">
        <label for="gambar">Gambar</label>
        <input type="file" name="gambar" id="gambar" class="form-control">
        <?php if (isset($prestasi) && $prestasi->gambar): ?>
            <img src="<?= base_url('uploads/prestasi/' . $prestasi->gambar); ?>" alt="Gambar Prestasi" width="100">
        <?php endif; ?>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
