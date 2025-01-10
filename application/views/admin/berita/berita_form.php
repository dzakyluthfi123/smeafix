<!-- Form untuk tambah/edit berita -->
<?php echo form_open_multipart('berita/save'); ?>

<input type="hidden" name="id" value="<?= isset($berita->id) ? $berita->id : ''; ?>">

<div class="container mt-4">
    <div class="card shadow-sm rounded">
        <div class="card-header bg-info text-white">
            <h4><?= isset($berita->id) ? 'Edit Berita' : 'Tambah Berita'; ?></h4>
        </div>
        <div class="card-body">
            <form>

                <!-- Judul -->
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" value="<?= isset($berita->judul) ? $berita->judul : ''; ?>" required>
                </div>

                <!-- Konten -->
                <div class="mb-3">
                    <label for="konten" class="form-label">Konten</label>
                    <textarea name="konten" id="konten" class="form-control" rows="5" required><?= isset($berita->konten) ? $berita->konten : ''; ?></textarea>
                </div>

                <!-- Penulis -->
                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" name="penulis" id="penulis" class="form-control" value="<?= isset($berita->penulis) ? $berita->penulis : ''; ?>" required>
                </div>

                <!-- Tanggal -->
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= isset($berita->tanggal) ? $berita->tanggal : ''; ?>" required>
                </div>

                <!-- Foto -->
                <div class="mb-3">
                    <label for="img" class="form-label">Foto</label>
                    <?php if (isset($berita->img) && $berita->img): ?>
                        <div class="mb-2">
                            <img src="<?= base_url('uploads/berita/' . $berita->img); ?>" alt="<?= $berita->judul; ?>" width="100" class="img-fluid rounded">
                            <input type="hidden" name="existing_img" value="<?= $berita->img; ?>">
                        </div>
                    <?php endif; ?>
                    <input type="file" name="img" id="img" class="form-control">
                </div>

                <!-- Submit Button -->
                <div class="text-end">
                    <button type="submit" class="btn btn-success"><?= isset($berita->id) ? 'Update Berita' : 'Simpan Berita'; ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php echo form_close(); ?>
