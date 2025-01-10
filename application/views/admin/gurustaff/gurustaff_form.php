<div class="container mt-4">
    <h2><?= isset($gurustaff) ? 'Edit' : 'Tambah'; ?> Guru/Staff</h2>

    <!-- Form -->
    <form action="<?= isset($gurustaff) ? site_url('gurustaff/update/'.$gurustaff['id']) : site_url('gurustaff/store') ?>" 
          method="POST" enctype="multipart/form-data">

        <!-- Nama -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" 
                   value="<?= isset($gurustaff) ? $gurustaff['nama'] : ''; ?>" required>
        </div>

        <!-- Jabatan -->
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan:</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" 
                   value="<?= isset($gurustaff) ? $gurustaff['jabatan'] : ''; ?>" required>
        </div>

        <!-- Gambar -->
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar:</label>
            <input type="file" class="form-control" id="gambar" name="gambar">

            <?php if (isset($gurustaff) && $gurustaff['gambar']): ?>
                <div class="mt-2">
                    <p>Gambar Saat Ini:</p>
                    <img src="<?= base_url('uploads/gurustaff/'.$gurustaff['gambar']) ?>" 
                         class="img-fluid rounded" width="100" height="100" alt="Gambar Guru/Staff">
                </div>
            <?php endif; ?>
        </div>

        <!-- Submit Button -->
        <div class="text-end">
            <button type="submit" class="btn btn-success"><?= isset($gurustaff) ? 'Update' : 'Tambah'; ?> Data</button>
        </div>
    </form>
</div>
