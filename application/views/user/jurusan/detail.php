
<br>
    <br>
    <br><br>
    <style>
        .imagekepalasekolah1 {
            display: flex;
            justify-content: center;
            padding: 6px;
            width: fit-content;
            margin: 20px auto;
        }

        .judulsambutan h2 {
            color: black;
            text-align: center;
        }

        .underline {
            width: 50px;
            height: 3px;
            background-color: black;
            margin: 10px auto;
        }

        .isisambutan {
            padding: 20px;
            text-align: justify;
        }
    </style>
    <div class="imagekepalasekolah1" style="width: 300px; height: 300px;">
        <img src="<?= base_url('uploads/jurusan/' . $jurusan->logo) ?>" alt="tjkt" class="kepalasekolah-img" width="300" height="300">
    </div>
    <br>
    <div class="judulsambutan">
        <h2><?= $jurusan->nama ?></h2>
        <div class="underline"></div>
    </div>
    <br>
    <div class="isisambutan">
        <p><?= $jurusan->deskripsi ?></p>
    </div>
    <br>