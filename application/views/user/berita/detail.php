
    <!-- Konten halaman -->
    <div class="containersambutankepalasekolah">
        <h4 class="home" style="font-size: 20px; margin-top: 4px;">Home</h4>
        <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
        <h4 style="margin-left: 1%; font-size: 20px; margin-top: 4px;">Berita Terbaru</h4>
    </div>

    <?php if (!empty($berita->img)): ?>
    <div class="imagekepalasekolah1" style="margin-left: 17%; margin-top: 2%;">
        <img src="<?php echo base_url('uploads/berita/' . htmlspecialchars($berita->img)); ?>" 
             alt="<?php echo htmlspecialchars($berita->judul); ?>" 
             class="kepalasekolah-img" 
             style="width: 80%;" height="80%">
    </div>
    <?php endif; ?>

    <br>

    <div class="judulsambutan">
        <h2 style="color: blue;"><?php echo htmlspecialchars($berita->judul); ?></h2>
        <div class="underline"></div>
    </div>

    <br>

    <div class="isisambutan">
        <p><?php echo nl2br(htmlspecialchars($berita->konten)); ?></p>
    </div>
