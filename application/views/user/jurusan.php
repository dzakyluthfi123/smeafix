<div class="blue-container">
    <div class="judul" style="color: black;">
        <h1>Kompetensi Keahlian</h1>
    </div>
    <div class="underline"></div>
    <br>
    <div class="card-container23">
        <?php foreach ($jurusan as $j): ?>
            <a href="<?= base_url('jurusan/detail/' . $j->slug) ?>" class="card23">
                <!-- Gambar logo -->
                <img alt="<?= $j->nama ?>" src="<?= base_url('uploads/jurusan/' . $j->logo) ?>" class="card-image" height="50" width="50" />
                <br>
                <div class="text-container">
                    <!-- Judul dan deskripsi -->
                    <span class="title" style="text-decoration: none;"><?= $j->nama ?></span>
                    <h6 class="subtitle"><?= $j->deskripsi ?></h6>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
