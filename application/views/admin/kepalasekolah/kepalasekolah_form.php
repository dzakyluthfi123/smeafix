<?php if ($kepalasekolah): ?>
    <h2>Edit Sambutan Kepala Sekolah</h2>
    <!-- Form untuk mengedit data -->
    <form action="<?= base_url('kepalasekolah/save'); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $kepalasekolah['id']; ?>">
        
        <label for="judul">Judul:</label>
        <input type="text" name="judul" value="<?= $kepalasekolah['judul']; ?>" required>

        <label for="isisambutan">Isi Sambutan:</label>
        <textarea name="isisambutan" required><?= $kepalasekolah['isisambutan']; ?></textarea>

        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" value="<?= $kepalasekolah['tanggal']; ?>" required>

        <label for="foto">Foto:</label>
        <!-- Menampilkan gambar yang sudah ada jika ada -->
        <?php if (!empty($kepalasekolah['foto'])): ?>
            <div>
                <img src="<?= base_url('uploads/kepalasekolah/' . $kepalasekolah['foto']); ?>" width="100" alt="Foto Sambutan Kepala Sekolah">
            </div>
        <?php endif; ?>
        
        <input type="file" name="foto"> <!-- Input untuk upload foto baru -->

        <button type="submit">Simpan</button>
    </form>
<?php else: ?>
    <h2>Tambah Sambutan Kepala Sekolah</h2>
    <!-- Form untuk menambah data -->
    <form action="<?= base_url('kepalasekolah/save'); ?>" method="post" enctype="multipart/form-data">
        <input type="text" name="judul" placeholder="Judul Sambutan" required>
        <textarea name="isisambutan" placeholder="Isi Sambutan" required></textarea>
        <input type="date" name="tanggal" required>
        <input type="file" name="foto">
        <button type="submit">Simpan</button>
    </form>
<?php endif; ?>
