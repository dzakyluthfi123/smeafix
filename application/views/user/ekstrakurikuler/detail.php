

<br>
    <br>
    <br>
    <br>
    <div class="containersambutankepalasekolah">
        <h4 class="home" style="font-size: 20px; margin-top: 4px;">Home</h4>
        <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
        <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
        <h4 style="margin-left: 1%; font-size: 20px; margin-top: 4px;">Ekstrakurikuler</h4>
    </div>
    <br>
    <?php if ($ekstrakurikuler->gambar): ?>
    <div class="imagepaskibra">
        <img src="<?= base_url('uploads/ekstrakurikuler/' . $ekstrakurikuler->gambar) ?>" alt="paskibra" class="paskibra-img" width="50%" style="margin-left: 25%;">
    </div>
    <?php endif; ?>
    <br>
    <div class="judulsambutan">
        <h2><?= $ekstrakurikuler->nama_ekstra ?></h2>
        <div class="underline"></div>
    </div>
    <br>
    <div class="isisambutan">
    <?= $ekstrakurikuler->deskripsi ?>
    </div>
    <br>
    <div class="containersambutankepalasekolah">
        <h4 style="margin-left: 1%; font-size: 20px; margin-top: 4px;">Di Bimbing Oleh:<?= $ekstrakurikuler->pembimbing ?></h4>
    </div>
    <br>
    <br>
    <br>