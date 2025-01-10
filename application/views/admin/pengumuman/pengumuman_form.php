<?php echo form_open(current_url()); ?>

<div class="container mt-4">
    <h3 class="mb-4 text-center">Form Pengumuman</h3>

    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" id="judul" name="judul" class="form-control" value="<?= set_value('judul', isset($pengumuman) ? $pengumuman['judul'] : '') ?>" required>
    </div>

    <div class="form-group">
        <label for="isi">Isi</label>
        <textarea name="isi" id="isi" class="form-control" rows="5" required><?= set_value('isi', isset($pengumuman) ? $pengumuman['isi'] : '') ?></textarea>
    </div>

    <div class="form-group">
        <label for="tanggal_mulai">Tanggal Mulai</label>
        <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="form-control" value="<?= set_value('tanggal_mulai', isset($pengumuman) ? $pengumuman['tanggal_mulai'] : '') ?>" required>
    </div>

    <div class="form-group">
        <label for="tanggal_selesai">Tanggal Selesai</label>
        <input type="date" id="tanggal_selesai" name="tanggal_selesai" class="form-control" value="<?= set_value('tanggal_selesai', isset($pengumuman) ? $pengumuman['tanggal_selesai'] : '') ?>" required>
    </div>

    <div class="form-group text-center">
        <button type="submit" class="btn btn-primary btn-lg">Simpan</button>
    </div>
</div>

<?php echo form_close(); ?>
