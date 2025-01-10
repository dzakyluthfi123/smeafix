<div id="layoutSidenav_content">
    <main>
        <script type="text/javascript">
            // Update every second to show date and time
            window.setTimeout("waktu()", 1000);

            function waktu() {
                var tanggallengkap = new String();
                var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
                namahari = namahari.split(" ");
                var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
                namabulan = namabulan.split(" ");
                var tanggal = new Date();
                var hari = tanggal.getDay();
                var tgl = tanggal.getDate();
                var bulan = tanggal.getMonth();
                var tahun = tanggal.getFullYear();
                tanggallengkap = namahari[hari] + ", " + tgl + " " + namabulan[bulan] + " " + tahun;
                setTimeout("waktu()", 1000);
                document.getElementById("datetime2").innerHTML = tanggallengkap + " | " + tanggal.getHours() + ":" + tanggal.getMinutes() + ":" + tanggal.getSeconds();
            }
        </script>
        
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-3" id="datetime2"></h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2">
                                    <h2 class="fw-normal mb-1">Welcome, <?php echo $username; ?></h2>
                                    <p class="text-muted mb-3">SMEANSAWI</p>
                                    <a class="btn btn-md btn-success" target="_blank" href="<?php echo base_url(); ?>">Preview Website</a>
                                </div>
                                <br>
                                <div class="progress progress-bar-alt-info progress-sm">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                        <span class="visually-hidden"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>

            <div class="row">
                <!-- Card for Berita -->
                <div class="col-xl-4 col-md-6">
                    <div class="card shadow-sm border-light rounded">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-3">Berita</h4>
                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-end">
                                    <h4 style="color: white;"><span class="badge bg-danger rounded-pill float-start mt-2">SMEANSAWI</span></h4>
                                    <h2 class="fw-normal mb-1"><?= $total_berita ?></h2>
                                    <p class="text-muted mb-3">Total Berita</p>
                                </div>
                                <div class="progress progress-bar-alt-primary progress-sm">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                        <span class="visually-hidden"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <!-- Card for Ekstrakurikuler -->
                <div class="col-xl-4 col-md-6">
                    <div class="card shadow-sm border-light rounded">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-3">Ekstrakurikuler</h4>
                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-end">
                                    <h4 style="color: white;"><span class="badge bg-primary rounded-pill float-start mt-2">SMEANSAWI</span></h4>
                                    <h2 class="fw-normal mb-1"><?= $total_ekstrakurikuler ?></h2>
                                    <p class="text-muted mb-3">Total Ekstrakurikuler</p>
                                </div>
                                <div class="progress progress-bar-alt-primary progress-sm">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                        <span class="visually-hidden"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <!-- Card for Jurusan -->
                <div class="col-xl-4 col-md-6">
                    <div class="card shadow-sm border-light rounded">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-3">Jurusan</h4>
                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-end">
                                    <h4 style="color: white;"><span class="badge bg-success rounded-pill float-start mt-2">SMEANSAWI</span></h4>
                                    <h2 class="fw-normal mb-1"><?= $total_jurusan ?></h2>
                                    <p class="text-muted mb-3">Total Jurusan</p>
                                </div>
                                <div class="progress progress-bar-alt-success progress-sm">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                        <span class="visually-hidden"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

        </div>
    </main>
</div>
