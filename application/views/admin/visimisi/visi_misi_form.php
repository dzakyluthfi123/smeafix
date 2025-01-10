<div class="container mt-4">
    <h1><?= isset($visi_misi) ? 'Edit' : 'Tambah' ?> Visi & Misi</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="visi" class="form-label">Visi:</label>
            <textarea class="form-control" name="visi" id="visi" rows="3" required><?= isset($visi_misi) ? $visi_misi['visi'] : '' ?></textarea>
        </div>

        <div class="mb-3">
            <label for="misi" class="form-label">Misi:</label>
            <textarea class="form-control" name="misi" id="misi" rows="3" required><?= isset($visi_misi) ? $visi_misi['misi'] : '' ?></textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar:</label>
            <input type="file" class="form-control" name="gambar" id="gambar">
            <?php if (isset($visi_misi) && $visi_misi['gambar']): ?>
                <div class="mt-2">
                    <p>Gambar saat ini:</p>
                    <img src="<?= base_url('uploads/' . $visi_misi['gambar']) ?>" alt="Gambar" width="100">
                </div>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>