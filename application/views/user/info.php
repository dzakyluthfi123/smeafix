  <!-- content -->
  <div class="info-container">
    <!-- Pengumuman -->
    <div class="pengumuman reveal" id="pengumuman">
        <h3 style="background-color: rgb(25, 25, 79); color: white; padding: 20px; border-radius: 5px; width: 90%; text-align: center; font-weight: bold;">
            Pengumuman
        </h3>
        <br>
        <div class="pengumuman">
        <?php foreach ($pengumuman as $row): ?>
            <b><a href="<?php echo site_url('errors/page_missing'); ?>"><?php echo htmlspecialchars($row['judul']); ?></a></b>
            <br><br>
        <?php endforeach; ?>
        </div>
    </div>

    <!-- Sambutan Kepala Sekolah -->
    <div class="sambutan reveal">
        <h2 style="background-color: rgb(25, 25, 79); color: white; padding: 20px; border-radius: 5px; width: 100%;">Sambutan Kepala Sekolah</h2>
        <br>
        <?php if ($kepalasekolah): ?>
            <img src="<?php echo base_url('uploads/kepalasekolah/' . $kepalasekolah['foto']); ?>" class="image-float" alt="Kepala Sekolah">
            <br>
            <p><?= $kepalasekolah['isisambutan']; ?></p>
            <p><strong>Tanggal:</strong> <?= date('d F Y', strtotime($kepalasekolah['tanggal'])); ?></p>
            <?php else: ?>
        <!-- Jika tidak ada sambutan, tampilkan pesan -->
        <p>Sambutan kepala sekolah belum tersedia.</p>
    <?php endif; ?>

    </div>
</div>
