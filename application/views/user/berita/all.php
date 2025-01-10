<br>
<br>
<br>
<br>
<div class="containersambutankepalasekolah">
    <h4 class="home" style="font-size: 20px; margin-top: 4px;">Home</h4>
    <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
    <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
    <h4 style="margin-left: 1%; font-size: 20px; margin-top: 4px;">Berita</h4>
</div>
<br>

<!-- Kolom Kiri: Pencarian dan Kategori -->
<div class="containerberita">
    <div class="left-columnberita">
        <!-- Kotak Pencarian -->
        <div class="containersearchberita">
            <h3>Search</h3>
            <br>
            <div class="search-boxberita">
                <input type="text" id="searchQuery" placeholder="Cari...">
                <button type="button" onclick="performSearch()">Search</button>
            </div>
            <script>
function performSearch() {
    var query = document.getElementById('searchQuery').value.trim(); // Ambil nilai pencarian
    if (query) {
        // Arahkan ke controller pencarian
        window.location.href = "<?php echo site_url('search'); ?>?query=" + encodeURIComponent(query);
    } else {
        // Jika tidak ada query, arahkan ke halaman 404
        window.location.href = "<?php echo site_url('errors/page_missing'); ?>";
    }
}
</script>
        </div>

        <!-- Kategori -->
        <div class="containercategoryberita">
            <h3>Archive</h3>
            <br>
            <div class="bg">
            <ul>
                        <?php if (!empty($berita)): ?>
                            <?php foreach ($berita as $item): ?>
                                <li><?= $item->judul; ?></li>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p class="text-center">Belum ada berita yang tersedia.</p>
                            <?php endif; ?>

                    </ul>
            </div>
        </div>
    </div>

    <!-- Kolom Kanan: Menampilkan Berita -->
    <div class="right-columnberita">
        <h3 style="color: black;">Latest News</h3>
        <br>

        <!-- Memeriksa jika ada berita untuk ditampilkan -->
        <?php if (isset($berita) && (is_array($berita) || is_object($berita)) && count($berita) > 0): ?>
            <?php foreach ($berita as $item): ?>
                <div class="news-itemberita">
                    <!-- Menampilkan gambar berita -->
                    <img src="<?= base_url('uploads/berita/' . $item->img); ?>" alt="<?= $item->judul; ?>" class="news-image" style="width: 50%; height: 50%;">
                    <h4><?= $item->judul; ?></h4>
                    <p><?= substr($item->konten, 0, 100); ?>... <a href="<?= base_url('berita/detail/' . $item->slug); ?>">Read More</a></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No news available at the moment.</p>
        <?php endif; ?>
    </div>
</div>
