    <!-- berita section -->
    <div class="container-fluid" id="beritaterbaru">
        <div class="berita-section">
            <h1 class="text-center">Berita Terbaru</h1>
            <div class="underline"></div>
            <br>
            <div class="row">
                <!-- Card 1 -->
                <div class="row">
                <?php foreach ($berita as $item): ?>
    <div class="col-md-4 mb-4">
        <div class="card gray-bg">
            <!-- Container for image and date -->
            <div class="position-relative">
                <img src="<?= base_url('uploads/berita/' . $item->img); ?>" class="card-img-top img-fit" alt="<?= $item->judul; ?>">
                
                <!-- Date Box -->
                <div class="date-box position-absolute bottom-0 start-0 text-white p-2">
                    <p class="m-0" style="font-size: 20px; text-align: center; color: yellow;">
                        <?= date('d', strtotime($item->tanggal)); ?><br>
                        <span style="font-family: Poppins, sans-serif; font-size: 15px; color: yellow;">
                            <?= date('M/Y', strtotime($item->tanggal)); ?>
                        </span>
                    </p>
                </div>
            </div>

            <div class="card-body">
                <h3 style="color: rgb(43, 43, 184);"><?= $item->judul; ?></h3>
                <p style="color: grey;"><?= substr($item->konten, 0, 100); ?>...</p>
                <a href="<?= base_url('berita/detail/' . $item->slug); ?>" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>

</div>

                <!-- card2 -->
              
    
                <br>
                <div class="buttontampilkansemuaberita">
                    <button class="custom-button">
                        <a href="<?= base_url('all'); ?>">Tampilkan Semua Berita</a>
                    </button>
                </div>
                
            </div>
            <!-- Tambahkan baris/kartu berita lainnya jika diperlukan -->
        </div>
    </div>
    <br>