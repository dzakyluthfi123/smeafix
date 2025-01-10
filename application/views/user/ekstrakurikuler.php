<br>
<br>
<br>

<div class="judul" style="color: black;">
    <h1>Ekstrakurikuler</h1>
    <div class="underline"></div>
</div>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php 
        $chunked_ekstrakurikuler = array_chunk($ekstrakurikuler, 3); // Membagi data menjadi kelompok 3 item
        $isActive = true;
        foreach ($chunked_ekstrakurikuler as $group): ?>
            <div class="carousel-item <?= $isActive ? 'active' : ''; ?>">
                <div class="d-flex">
                    <?php foreach ($group as $item): ?>
                        <div class="col-4 p-2">
                            <div class="card">
                                <!-- Mengakses objek dengan '->' bukan array -->
                                <img src="<?= base_url('uploads/ekstrakurikuler/' . $item->gambar); ?>" class="card-img-top" alt="<?= $item->nama_ekstra; ?>">
                                <div class="card-body">
                                    <h4 class="card-title"><?= $item->nama_ekstra; ?></h4>
                                    <p><?= substr($item->deskripsi, 0, 100); ?>...</p>
                                    <a href="<?= base_url('ekstrakurikuler/detail/' . $item->slug); ?>" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php $isActive = false; ?>
        <?php endforeach; ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
