<br>
    <br>
    <br>
    <br>
    <div class="containersambutankepalasekolah">
        <h4 class="home" style="font-size: 20px; margin-top: 4px;">Home</h4>
        <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
        <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
        <h4 style="margin-left: 1%; font-size: 20px; margin-top: 4px;">Prestasi</h4>
    </div>
    <br>
    <div class="imagepmr">
        <img src="<?= base_url('uploads/prestasi/' . $prestasi->gambar) ?>" alt="pmr" class="pmr-img" width="50%" style="margin-left: 25%;">
    </div>
    <br>
    <div class="judulsambutan">
        <h2><?= $prestasi->judul ?></h2>
        <div class="underline"></div>
    </div>
    <br>
    <div class="isisambutan">
    <?= $prestasi->deskripsi ?>
    </div>
    <br>
    <div class="containersambutankepalasekolah" style="display: flex; align-items: center;">
        <h4 style="margin-left: 1%; font-size: 20px; margin-top: 4px;">Tanggal</h4>
        <h4 style="font-size: 20px; margin-left: 5px;">:</h4>
        <h4 style="font-size: 20px; margin-left: 10px;"><?= $prestasi->tanggal ?></h4>
    </div>
    <br>
    <div class="containersambutankepalasekolah" style="display: flex; align-items: center; padding: 0 3%;">
        <h4 style="font-size: 1.25rem; margin-top: 4px;"><i class="fas fa-user"></i></h4>
        <h4 style="font-size: 1.25rem; margin-left: 2rem;">:</h4>
        <h4 style="font-size: 1.25rem; margin-left: 1rem;"><?= $prestasi->penulis ?></h4>
    </div>
    
    <style>
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .containersambutankepalasekolah h4 {
                font-size: 1rem;
            }
    
            .containersambutankepalasekolah h4 + h4 {
                margin-left: 1.5rem;
            }
    
            .containersambutankepalasekolah h4:nth-child(3) {
                margin-left: 0.75rem;
            }
        }
    
        @media (max-width: 480px) {
            .containersambutankepalasekolah h4 {
                font-size: 0.875rem;
            }
    
            .containersambutankepalasekolah h4 + h4 {
                margin-left: 1rem;
            }
    
            .containersambutankepalasekolah h4:nth-child(3) {
                margin-left: 0.5rem;
            }
        }
    </style>
    
    
    <br>
    <br>
    <br>