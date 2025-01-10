<div class="container mt-4">
    <h2><?= isset($sejarah) ? 'Edit' : 'Tambah'; ?> Sejarah</h2>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul:</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?= isset($sejarah) ? $sejarah['judul'] : ''; ?>" required>
        </div>

        <div class="mb-3">
            <label for="konten" class="form-label">Konten:</label>
            <textarea class="form-control" id="konten" name="konten" rows="5"><?= isset($sejarah) ? $sejarah['konten'] : ''; ?></textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar:</label><br>
            <?php if (isset($sejarah) && $sejarah['gambar']): ?>
                <div class="mb-2">
                    <p>Gambar saat ini:</p>
                    <img src="<?= base_url('uploads/' . $sejarah['gambar']); ?>" width="100" alt="Current Image">
                </div>
            <?php endif; ?>
            <input type="file" class="form-control" id="gambar" name="gambar">
        </div>

        <button type="submit" class="btn btn-primary"><?= isset($sejarah) ? 'Update' : 'Simpan'; ?></button>
    </form>
</div>