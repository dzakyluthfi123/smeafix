<form method="post" enctype="multipart/form-data" class="container mt-4">
    <div class="mb-3">
        <label for="title" class="form-label">Judul:</label>
        <input type="text" class="form-control" id="title" name="title" value="<?= isset($info_ppdb->title) ? $info_ppdb->title : '' ?>" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi:</label>
        <textarea class="form-control" id="description" name="description"><?= isset($info_ppdb->description) ? $info_ppdb->description : '' ?></textarea>
    </div>

    <div class="mb-3">
        <label for="youtube" class="form-label">URL YouTube:</label>
        <input type="text" class="form-control" id="youtube" name="youtube" value="<?= isset($info_ppdb->youtube) ? $info_ppdb->youtube : '' ?>">
    </div>

    <div class="mb-3">
        <label for="instagram" class="form-label">Instagram:</label>
        <input type="text" class="form-control" id="instagram" name="instagram" value="<?= isset($info_ppdb->instagram) ? $info_ppdb->instagram : '' ?>">
    </div>

    <div class="mb-3">
        <label for="facebook" class="form-label">Facebook:</label>
        <input type="text" class="form-control" id="facebook" name="facebook" value="<?= isset($info_ppdb->facebook) ? $info_ppdb->facebook : '' ?>">
    </div>

    <div class="mb-3">
        <label for="twitter" class="form-label">Twitter:</label>
        <input type="text" class="form-control" id="twitter" name="twitter" value="<?= isset($info_ppdb->twitter) ? $info_ppdb->twitter : '' ?>">
    </div>

    <div class="mb-3">
        <label for="telegram" class="form-label">Telegram:</label>
        <input type="text" class="form-control" id="telegram" name="telegram" value="<?= isset($info_ppdb->telegram) ? $info_ppdb->telegram : '' ?>">
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Gambar:</label>
        <input type="file" class="form-control" id="image" name="image">
        <?php if (!empty($info_ppdb->image)): ?>
            <div class="mt-2">
                <p>Gambar saat ini:</p>
                <img src="<?= base_url('uploads/' . $info_ppdb->image) ?>" width="100" alt="Current Image">
            </div>
        <?php endif; ?>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>