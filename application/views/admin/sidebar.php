<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand justify-content-center" href="index.html">
                <div class="logo"><img src="<?php echo base_url('template/assets/img/smkn 1 slawi.png'); ?> " style="width: 70px; height: 70px;"></div>
                <div class="sidebar-brand-text mx-5 " style="text-align: center; color: white;">SMEANSAWI</div>
                <hr class="sidebar-divider">

            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 mb-5">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/dashboard'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                
            </li>
            <hr class="sidebar-divider">

            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Manejemen Berita</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('admin/pengumuman'); ?>">Pengumuman</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/berita'); ?>">Berita</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/prestasi'); ?>">Prestasi</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/infoppdb'); ?>">Info PPDB</a>

                        <a class="collapse-item" href="<?php echo base_url('admin/stats'); ?>">Rombel</a>



                    </div>
                </div>
            </li>
            <!-- Divider -->

            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Profile sekolah</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('admin/kepalasekolah'); ?>">Kepala Sekolah (Sambutan)</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/jurusan'); ?>">jurusan</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/ekstrakurikuler'); ?>">Ekstrakurikuler</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/gurustaff'); ?>">Gurustaff</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/kontak'); ?>">Kontak</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/sejarah'); ?>">Sejarah</a>
                        <a class="collapse-item" href="  <?php echo base_url('admin/kritiksaran'); ?>">Kritik & Saran</a>
                        <a class="collapse-item" href="<?= base_url('admin/visimisi'); ?>">Visi & Misi</a>
                        <a class="collapse-item" href="<?php echo site_url('admin/galeri'); ?>">Galery</a>
                        <a class="collapse-item" href="<?php echo site_url('admin/saranaprasarana'); ?>">Sarana Prasarana</a>
                        </div>
                </div>
                <hr class="sidebar-divider">

                <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('admin/profile'); ?>">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>                    
                <span>Profile</span></a>
            </li>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
     
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            
                        </li>
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li> -->
                        <li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-envelope fa-fw"></i>
        <span class="badge badge-danger badge-counter"><?= $total_unread_kritiksaran; ?></span>
    </a>
    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
         aria-labelledby="messagesDropdown">
        <h6 class="dropdown-header">
            Message Center
        </h6>
        
        <!-- Menampilkan kritik/saran yang belum dibaca dulu, kemudian yang sudah dibaca -->
        <?php if (!empty($kritiksaran)): ?>
            <?php
            // Separate unread and read messages
            $unread_kritiksaran = array_filter($kritiksaran, function($kritik) {
                return $kritik->status == 'unread';
            });
            $read_kritiksaran = array_filter($kritiksaran, function($kritik) {
                return $kritik->status == 'read';
            });

            // Merge unread and read, unread will be on top
            $sorted_kritiksaran = array_merge($unread_kritiksaran, $read_kritiksaran);

            // Limit to the 4 most recent feedbacks
            $latest_kritiksaran = array_slice($sorted_kritiksaran, 0, 4);
            ?>
            
            <?php foreach ($latest_kritiksaran as $kritik): ?>
                <a class="dropdown-item d-flex align-items-center" href="<?php echo site_url('admin/kritiksaran'); ?>">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="<?php echo base_url('template/admin/img/undraw_profile_1.svg'); ?>"
                             alt="...">
                        <div class="status-indicator <?= $kritik->status == 'unread' ? 'bg-success' : 'bg-warning'; ?>"></div>
                    </div>
                    <div>
                        <div class="text-truncate"><?= htmlspecialchars($kritik->isi_kritik_saran); ?></div>
                        <div class="small text-gray-500"><?= htmlspecialchars($kritik->nama_pengirim); ?> · <?= htmlspecialchars($kritik->email_pengirim); ?></div>
                    </div>
                </a>
            <?php endforeach; ?>
        <?php else: ?>
            <a class="dropdown-item text-center small text-gray-500" href="#">No new messages</a>
        <?php endif; ?>

        <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
    </div>
</li>



                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $username?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url('template/admin/img/undraw_profile.svg'); ?>">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url('admin/logout'); ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>