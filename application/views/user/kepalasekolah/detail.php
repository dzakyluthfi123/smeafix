


    <br>
    <br>
    <br>
    <div class="containersambutankepalasekolah">
        <h4 class="home" style="font-size: 20px; margin-top: 4px;">Home</h4>
        <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
        <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
        <h4 style="margin-left: 1%; font-size: 20px; margin-top: 4px;">Sambutan Kepala Sekolah</h4>
    </div>
    <br>
    <?php if ($sambutan->foto): ?>
    <div class="imagekepalasekolah">
        <img src="<?php echo base_url('uploads/kepalasekolah/' . $sambutan->foto); ?>" alt="Kepala Sekolah" class="kepalasekolah-img">
    </div>
    <?php endif; ?>
    <br>
    <div class="judulsambutan">
        <h2><?php echo $sambutan->judul; ?></h2>
        <div class="underline"></div>
    </div>
    <br>
    <div class="isisambutan">
        <p><?php echo $sambutan->isisambutan; ?>
        </p>
    </div>
