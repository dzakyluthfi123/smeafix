<!-- guru & pendidik -->

<style>
    .card img {
height: 2000%; /* Tinggi tetap untuk gambar card */
object-fit: cover; /* Mengatur gambar agar tidak terdistorsi */
}

.card {
cursor: pointer;
flex: 1; /* Membuat card mengisi ruang yang tersedia */
}

 </style>
 <br>
 <br>
 <br>
<!-- <div class="judul" style="color: black;">
    <h1>Guru dan Tenaga Kependidikan</h1>
    <div class="underline"></div>
</div>

<div id="carouselExampleControls2" class="carousel slide" data-bs-ride="false">
<div class="carousel-inner" id="prestasi">
    <div class="carousel-item active">
        <div class="d-flex">
        <div class="row">
    <?php foreach ($gurustaff as $staff): ?>
        <div class="col-4 p-2">
            <div class="card">
                <div class="card-body" style="height: 100%;">
                    <div class="img">
                        <img src="<?= base_url('uploads/gurustaff/' . $staff['gambar']) ?>" alt="<?= $staff['nama'] ?>" width="50%" height="50%" style="margin-left: 25%; border: 3px solid grey; border-radius: 3px;">
                        <br><br>

                        <h4 style="margin-left: 15%; font-size: 23px;"><?= $staff['nama'] ?></h4>
                        <h6 style="margin-left: 35%;"><?= $staff['jabatan'] ?></h6>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

    
          
        </div>
    </div>
 
  

</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div>
 -->
 <div class="judul" style="color: black;">
    <h1>Guru dan Tenaga Kependidikan</h1>
    <div class="underline"></div>
</div>
<br>

<div id="carouselExampleControls2" class="carousel slide" data-bs-ride="false">
    <div class="carousel-inner" id="prestasi">
        <?php if (!empty($gurustaff) && is_array($gurustaff)): ?>
            <?php $active = 'active'; ?>
            <?php foreach (array_chunk($gurustaff, 3) as $chunk): ?>
                <div class="carousel-item <?= $active; ?>">
                    <div class="d-flex">
                        <?php foreach ($chunk as $staff): ?>
                            <div class="col-4 p-2">
                <div class="card">
                   
                    <div class="card-body">
                        <div class="img">
                        <?php if (!empty($staff['gambar']) && file_exists('uploads/gurustaff/' . $staff['gambar'])): ?>
                                            <img src="<?= base_url('uploads/gurustaff/' . $staff['gambar']); ?>" alt="" width="50%" height="50%" style="margin-left: 25%; border: 3px solid grey; border-radius: 3px;">
                                        <?php else: ?>
                                            <img src="<?= base_url('uploads/default-image.jpg'); ?>" class="card-img-top" alt="Gambar Default" style="height: 200px; object-fit: cover;">  Gambar default
                                        <?php endif; ?>                            <br>
                            <br>
                            <h4 style="margin-left: 15%;"><?= isset($staff['nama']) ? htmlspecialchars($staff['nama']) : 'Nama Tidak Tersedia'; ?></h4>
                            <h6 style="margin-left: 35%;"><?= isset($staff['jabatan']) ? htmlspecialchars($staff['jabatan']) : 'Jabatan Tidak Tersedia'; ?></h6>
                           </div>
                    </div>
                </div>
            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php $active = ''; ?>
            <?php endforeach; ?>
        <?php else: ?>
        <?php endif; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<style>
        .carousel-control-prev, .carousel-control-next {
            position: absolute;
            top: 50%;
            width: 50px; /* Lebar tombol */
            height: 50px; /* Tinggi tombol */
            background-color: #070b10; /* Warna latar belakang */
            border-radius: 50%; /* Membuat tombol bulat */
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(32, 58, 224); /* Warna ikon */
            font-size: 2rem; /* Ukuran ikon */
            z-index: 1000; /* Menempatkan tombol di atas konten */
            transform: translateY(-50%); /* Menyelaraskan vertikal */
            /* transition: transform 0.3s ease, box-shadow 0.3s ease; */
            cursor: pointer; /* Menampilkan kursor pointer */
        }

        #customPrevBtn3 {
            left: -60px; /* Jarak tombol dari sisi kiri */
            color: red;
            background-color: #070b10;
        }

        #customNextBtn3 {
            right: -50px; /* Jarak tombol dari sisi kanan */
            color: red;
        }

        .carousel-control-prev:hover, .carousel-control-next:hover {
            transform: translateY(-50%) scale(1.1); /* Efek hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Efek bayangan saat hover */
        }
        .doctores_box {
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Bayangan kartu */
    transition: transform 0.3s ease; /* Transisi saat hover */
}

.doctores_box:hover {
    transform: scale(1.05); /* Efek zoom saat hover */
}

.image_1 img {
    display: block; /* Menghilangkan jarak di bawah gambar */
}
  /* Media Queries untuk responsif */
    @media (max-width: 768px) {
        .doctores_box {
            width: 90%; /* Lebar card untuk perangkat kecil */
        }

        .carousel-control-prev, .carousel-control-next {
            width: 40px; /* Lebar tombol untuk perangkat kecil */
            height: 40px; /* Tinggi tombol untuk perangkat kecil */
            font-size: 1.5rem; /* Ukuran ikon untuk perangkat kecil */
        }

        h5 {
            font-size: 12px; /* Ukuran teks nama untuk perangkat kecil */
        }
    }

    @media (max-width: 576px) {
        .doctores_box {
            width: 95%; /* Lebar card untuk perangkat sangat kecil */
        }

        .carousel-control-prev, .carousel-control-next {
            width: 35px; /* Lebar tombol untuk perangkat sangat kecil */
            height: 35px; /* Tinggi tombol untuk perangkat sangat kecil */
            font-size: 1.3rem; /* Ukuran ikon untuk perangkat sangat kecil */
        }

        h5 {
            font-size: 10px; /* Ukuran teks nama untuk perangkat sangat kecil */
        }
    }

    </style>
  
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the second carousel element
            var carousel2 = $('#prestasiCarousel3');
        
            // Handle custom previous button click
            $('#customPrevBtn3').on('click', function() {
                carousel2.carousel('prev');  // Trigger the previous slide
            });
        
            // Handle custom next button click
            $('#customNextBtn3').on('click', function() {
                carousel2.carousel('next');  // Trigger the next slide
            });
        });
        </script>
    
    <br>
    <br>

    <!-- guru and staff end -->
      
