<form action="<?= isset($galeri) ? site_url('galeri/update/' . $galeri->id) : site_url('galeri/store'); ?>" 
method="post" enctype="multipart/form-data">
<div class="container mt-4">
    <h2><?= isset($galeri) ? 'Edit' : 'Tambah'; ?> Galeri</h2>

    <!-- Error Message -->
    <?php if ($this->session->flashdata('error')): ?>
        <p class="text-danger"><?= $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <!-- Form -->
    <form action="<?= isset($galeri) ? site_url('galeri/update/' . $galeri->id) : site_url('galeri/store'); ?>" 
          method="post" enctype="multipart/form-data">

        <!-- Judul -->
        <div class="mb-3">
            <label for="judul" class="form-label">Judul:</label>
            <input type="text" name="judul" id="judul" class="form-control" 
                   value="<?= isset($galeri->judul) ? $galeri->judul : ''; ?>" required>
        </div>

        <!-- Deskripsi -->
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi:</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required>
                <?= isset($galeri->deskripsi) ? $galeri->deskripsi : ''; ?>
            </textarea>
        </div>

        <!-- Gambar -->
        <div class="mb-3">
            <label for="img" class="form-label">Gambar:</label>
            <input type="file" name="img" id="img" class="form-control">
            
            <?php if (isset($galeri) && $galeri->img): ?>
                <div class="mt-2">
                    <p>Gambar Saat Ini:</p>
                    <img src="<?= base_url('uploads/galeri/' . $galeri->img); ?>" 
                         width="100" alt="Gambar Galeri" class="img-fluid rounded">
                </div>
            <?php endif; ?>
        </div>

        <!-- Submit Button -->
        <div class="text-end">
            <button type="submit" class="btn btn-success"><?= isset($galeri) ? 'Update' : 'Simpan'; ?></button>
        </div>
</div>
</form>
