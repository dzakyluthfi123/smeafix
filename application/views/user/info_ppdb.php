
    <div class="containersambutankepalasekolah">
        <h4 class="home" style="font-size: 20px; margin-top: 4px;">Home</h4>
        <?php if (!empty($info_ppdb)): ?>
            <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
            <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
            <?php foreach ($info_ppdb as $item): ?>
                <h4 style="margin-left: 1%; font-size: 20px; margin-top: 4px;"><?= $item->title; ?></h4>
    </div>
    <br>
    <!-- <div class="imagepmr">
        <img src="assets/image/paskib 4.jpg" alt="pmr" class="pmr-img" width="50%" style="margin-left: 25%;">
    </div> -->
    <!-- <div class="judulsambutan">
        <h2>ENGLISH CLUB</h2>
        <div class="underline"></div>
    </div> -->
    <div class="isisambutan">
        <div class="judul" style="background-color: grey; width: 65%; margin-left: 17%;">
            <h2 style="color: white;"><?= $item->title; ?></h2>
        </div>
        <br>
        <br>
        <a href="https://drive.google.com/file/d/17eBNhTyU4sV3iHCqhbYZ26Thi2bCRaDc/view?usp=sharing" style="margin-left: 3%;"></a>
        <br>
        <br>
        <h6 style="margin-left: 1%; color: white; font-size: 20px;"><?= $item->description; ?></h6>
        <br>
        <img src="<?= base_url('uploads/' . $item->image); ?>" alt="" width="100%" height="100%">
        <img src="<?= base_url('uploads/' . $item->image); ?>" alt="" width="100%" height="100%">
        <br>
        <br>
        <h6 style="margin-left: 1%; color: white; font-size: 20px;">Brosur dalam bentuk file klik link dibawah ini :</h6>
        <br>
        <br>
        <h6 style="margin-left: 1%; color: white; font-size: 18px;">Bagian Depan</h6>
        <br>
        <a href="https://drive.google.com/file/d/1CjXWbVtk1C64XydWZ3wYBQ_gLpYMnB6q/view?usp=sharing" style="margin-left: 3%;">https://drive.google.com/file/d/1CjXWbVtk1C64XydWZ3wYBQ_gLpYMnB6q/view?usp=sharing</a>
        <br>
        <br>
        <h6 style="margin-left: 1%; color: white; font-size: 18px;">Bagian Belakang</h6>
        <br>
        <a href="https://drive.google.com/file/d/1jJcPHU4CXZW1ilqiZexwwKW3TjN50yKc/view?usp=sharing" style="margin-left: 3%;">https://drive.google.com/file/d/1jJcPHU4CXZW1ilqiZexwwKW3TjN50yKc/view?usp=sharing</a>
        <br>
        <br>
        <h6 style="margin-left: 1%; color: white; font-size: 20px;">Fan Pages Facebook Humas SMKN 1 Slawi :</h6>
        <br>
        <a href="<?= $item->youtube; ?>" style="margin-left: 3%;"><i class="fab fa-facebook"></i></a>
        <br>
        <br>
        <h6 style="margin-left: 1%; color: white; font-size: 20px;">Twitter Humas SMKN 1 Slawi :</h6>
        <br>
        <a href="<?= $item->youtube; ?>" style="margin-left: 3%;"><i class="fab fa-twitter"></i></a>
        <br>
        <br>
        <h6 style="margin-left: 1%; color: white; font-size: 20px;">Instagram Humas SMKN 1 Slawi :</h6>
        <br>
        <a href="<?= $item->youtube; ?>" style="margin-left: 3%;"><i class="fab fa-instagram"></i></a>
        <br>
        <br>
        <h6 style="margin-left: 1%; color: white; font-size: 20px;">Youtube Humas SMKN 1 Slawi :</h6>
        <br>
        <a href="<?= $item->youtube; ?>" style="margin-left: 3%;"><i class="fab fa-youtube"></i></a>
        <br>
        <br>
        <h6 style="margin-left: 1%; color: white; font-size: 20px;">Untuk informasi lebih lanjut bisa melalui whatsapp :</h6>
        <br>
        <h6 style="margin-left: 1%; color: white; font-size: 16px;">Klik pada link :</h6>
        <br>
        <a href="https://wa.me/+6285624502878" style="margin-left: 3%;"><i class="fab fa-whatsapp"></i></a>
        <br>
        <br>
        <h6 style="margin-left: 1%; color: white; font-size: 30px;">Telegram Grup PPDB SMKN 1 SLAWI</h6>
        <br>
        <a href="<?= $item->youtube; ?>" style="margin-left: 3%; font-size: 30px;"><i class="fab fa-telegram"></i></a>
    </div>
<?php endforeach; ?>
<?php else: ?>
    <p>Tidak ada informasi PPDB yang tersedia saat ini.</p>
<?php endif; ?>
<br>
