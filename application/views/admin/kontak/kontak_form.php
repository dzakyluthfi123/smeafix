<h2><?php echo isset($kontak) ? 'Edit Kontak' : 'Tambah Kontak'; ?></h2>
<form action="<?php echo isset($kontak) ? site_url('kontak/update') : site_url('kontak/save'); ?>" method="post">
    <?php if (isset($kontak)): ?>
        <input type="hidden" name="id" value="<?php echo $kontak->id; ?>">
    <?php endif; ?>
    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?php echo isset($kontak) ? $kontak->alamat : ''; ?>" required>
    </div>
    <div class="form-group">
        <label>Telepon</label>
        <input type="text" name="telepon" class="form-control" value="<?php echo isset($kontak) ? $kontak->telepon : ''; ?>" required>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo isset($kontak) ? $kontak->email : ''; ?>" required>
    </div>
    <div class="form-group">
        <label>Maps URL</label>
        <input type="text" name="maps_url" class="form-control" value="<?php echo isset($kontak) ? $kontak->maps_url : ''; ?>" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>