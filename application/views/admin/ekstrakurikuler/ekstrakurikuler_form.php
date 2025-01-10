<form action="<?= isset($ekstrakurikuler) ? base_url('ekstrakurikuler/form/' . $ekstrakurikuler->slug) : base_url('ekstrakurikuler/form'); ?>" 
      method="POST" enctype="multipart/form-data">
    
    <div class="container mt-4">
        <div class="card shadow-sm rounded">
            <div class="card-header bg-info text-white">
                <h4><?= isset($ekstrakurikuler) ? 'Edit Ekstrakurikuler' : 'Tambah Ekstrakurikuler'; ?></h4>
            </div>
            <div class="card-body">

                <!-- Nama Ekstrakurikuler -->
                <div class="mb-3">
                    <label for="nama_ekstra" class="form-label">Nama Ekstrakurikuler</label>
                    <input type="text" name="nama_ekstra" id="nama_ekstra" class="form-control" 
                           value="<?= isset($ekstrakurikuler) ? $ekstrakurikuler->nama_ekstra : ''; ?>" required>
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" required>
                        <?= isset($ekstrakurikuler) ? $ekstrakurikuler->deskripsi : ''; ?>
                    </textarea>
                </div>

                <!-- Logo -->
                <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    <input type="file" name="logo" id="logo" class="form-control">
                    <?php if (isset($ekstrakurikuler->logo) && $ekstrakurikuler->logo): ?>
                        <div class="mt-2">
                            <img src="<?= base_url('uploads/ekstrakurikuler/' . $ekstrakurikuler->logo); ?>" width="100" class="img-fluid rounded">
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Gambar -->
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="form-control">
                    <?php if (isset($ekstrakurikuler->gambar) && $ekstrakurikuler->gambar): ?>
                        <div class="mt-2">
                            <img src="<?= base_url('uploads/ekstrakurikuler/' . $ekstrakurikuler->gambar); ?>" width="100" class="img-fluid rounded">
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Pembimbing -->
                <div class="mb-3">
                    <label for="pembimbing" class="form-label">Pembimbing</label>
                    <input type="text" name="pembimbing" id="pembimbing" class="form-control" 
                           value="<?= isset($ekstrakurikuler) ? $ekstrakurikuler->pembimbing : ''; ?>" required>
                </div>

                <!-- Submit Button -->
                <div class="text-end">
                    <button type="submit" class="btn btn-success"><?= isset($ekstrakurikuler) ? 'Update Ekstrakurikuler' : 'Simpan Ekstrakurikuler'; ?></button>
                </div>

            </div>
        </div>
    </div>

</form>
                        