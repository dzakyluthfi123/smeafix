<div class="container mt-5">
    <h2 class="text-center"><?= isset($stat) ? 'Edit Statistik' : 'Tambah Statistik'; ?></h2>
    <form action="<?= isset($stat) ? site_url('stats/update/' . $stat->id) : site_url('stats/store'); ?>" method="post">
        <div class="form-group">
            <label for="jumlah_siswa">Jumlah Siswa</label>
            <input type="number" class="form-control" id="jumlah_siswa" name="jumlah_siswa" value="<?= isset($stat) ? $stat->jumlah_siswa : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="rombongan_belajar">Rombongan Belajar</label>
            <input type="number" class="form-control" id="rombongan_belajar" name="rombongan_belajar" value="<?= isset($stat) ? $stat->rombongan_belajar : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
            <input type="number" class="form-control" id="kompetensi_keahlian" name="kompetensi_keahlian" value="<?= isset($stat) ? $stat->kompetensi_keahlian : ''; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary"><?= isset($stat) ? 'Update' : 'Simpan'; ?></button>
        <a href="<?= site_url('stats'); ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>

<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>