<div class="container">
    <h1><?= isset($sarana) ? 'Edit' : 'Tambah' ?> Sarana Prasarana</h1>
    <form action="<?= isset($sarana) ? site_url('saranaprasarana/update/' . $sarana->id) : site_url('saranaprasarana/store') ?>" method="post">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= isset($sarana) ? $sarana->nama : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= isset($sarana) ? $sarana->jumlah : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" required><?= isset($sarana) ? $sarana->keterangan : '' ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary"><?= isset($sarana) ? 'Update' : 'Tambah' ?></button>
    </form>
</div>