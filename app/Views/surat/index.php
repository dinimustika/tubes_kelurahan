<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kelurahan Timbangan</title>

   

    <!-- Custom fonts for this template-->
    <link href="../dist/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Zoom CSS -->
    <link rel="stylesheet" type="text/css" href="../dist/css/zoom.css">

    <!-- Zoom Js -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../dist/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="../dist/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Kelurahan Timbangan</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profile</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a href="../user/profile/<?= user()->id;?>" class="collapse-item">My Profile</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-mail-bulk"></i>
                    <span>Surat</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Urus Surat:</h6>
                        <a href="../ktp/" class="collapse-item">Urus Surat <br>Keterangan KTP</a>
                        <a href="../akta/" class="collapse-item">Urus Surat <br>Keterangan Akta</a>
                        <a href="../penghasilan/" class="collapse-item">Urus Surat <br>Keterangan Penghasilan</a>
                        <a href="../kematian/" class="collapse-item">Urus Surat <br>Keterangan Kematian</a>
                        <a href="../cerai/" class="collapse-item">Urus Surat <br>Keterangan Cerai</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#miaw"
                    aria-expanded="true" aria-controls="miaw">
                    <i class="fas fa-cogs"></i>
                    <span>Perizinan</span>
                </a>
                <div id="miaw" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Urus Perizinan:</h6>
                        <a href="../simb" class="collapse-item">Urus SIMB</a>
                        <a href="../siup" class="collapse-item">Urus SIUP</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#rwyt"
                    aria-expanded="true" aria-controls="rwyt">
                    <i class="fas fa-history"></i>
                    <span>Riwayat Surat</span>
                </a>
                <div id="rwyt" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Riwayat Permohonan:</h6>
                        <a href="../user/riwayatKTP" class="collapse-item">Urus Pengantar KTP</a>
                        <a href="../user/riwayatAkta" class="collapse-item">Urus Pengantar Akta</a>
                        <a href="../user/riwayatPenghasilan" class="collapse-item">Urus Keterangan <br> Penghasilan</a>
                        <a href="../user/riwayatKematian" class="collapse-item">Urus Keterangan <br> Kematian</a>
                        <a href="../user/riwayatCerai" class="collapse-item">Urus Keterangan <br> Cerai</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#perizinan"
                    aria-expanded="true" aria-controls="perizinan">
                    <i class="fas fa-history"></i>
                    <span>Riwayat Perizinan</span>
                </a>
                <div id="perizinan" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Riwayat Permohonan:</h6>
                        <a href="../user/riwayatSIMB" class="collapse-item">SIMB</a>
                        <a href="../user/riwayatSIUP" class="collapse-item">SIUP</a>
                    </div>
                </div>
            </li>

      

            <?php if(in_groups('pegawai')) : ?>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="user/warga">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Daftar Warga</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#brta"
                    aria-expanded="true" aria-controls="brta">
                    <i class="far fa-newspaper"></i>
                    <span>Event & Berita</span>
                </a>
                <div id="brta" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Event & Berita</h6>
                        <a href="../berita" class="collapse-item">Tambah Berita</a>
                        <a href="../user/riwayatberita" class="collapse-item">Riwayat Berita</a>
                        <a href="../event" class="collapse-item">Tambah Event</a>
                        <a href="../user/riwayatevent" class="collapse-item">Riwayat Event</a>
                    </div>
                </div>
            </li>

            <?php endif; ?>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <?php
                                foreach ($jumlah->getResultArray() as $row):?>
                                <span class="badge badge-danger badge-counter"><?= $row['total'];?></span>
                            <?php endforeach; ?>
                            </a>
                            <!-- Dropdown - Alerts -->
                            

                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <?php
                                foreach ($alert->getResultArray() as $row):?>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500"><?= $row['created_at']?></div>
                                        <span class="font-weight-bold">
                                            <?php if (in_groups('warga')) : {
                                                echo "1 surat disetujui!";
                                            } ?>
                                            <?php elseif(in_groups('pegawai')) : {
                                                echo "1 surat selesai";
                                            } ?>
                                        <?php endif; ?>
                                        </span>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                            <?php
                                foreach ($alert_surat->getResultArray() as $row):?>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500"></div>
                                        <span class="font-weight-bold">
                                            <?php if (in_groups('warga')) : {
                                                echo "1 surat diproses!";
                                            } ?>
                                            <?php elseif(in_groups('pegawai')) : {
                                                echo "terdapat 1 surat baru";
                                            } ?>
                                        <?php endif; ?>
                                        </span>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                                <a class="dropdown-item text-center small text-gray-500" href="user/alerts">Show All Alerts</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= user()->username?></span>
                                <img class="img-profile rounded-circle"
                                    src="../dist/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="admin/<?= user()->id?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <?php if(in_groups('pegawai')) : ?>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div><br>

                    <h3>Selamat Datang Admin, <?= user()->username?></h3><br>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="User/riwayat">
                                                On-Going Task</div>
                                        
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                foreach ($belum_selese->getResultArray() as $row)
                                                {
                                                    echo $row['on_going'];
                                                }
                                                ?>
                                            </div></a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="User/riwayat">
                                                Finish Task</div>
                                        
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                foreach ($udah_selesai->getResultArray() as $row)
                                                {
                                                    echo $row['Finish_Task'];
                                                }
                                                ?>
                                            </div></a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- Content Row -->

            <!-- End of Main Content -->
            <?php endif;?>
            <!-- Footer -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= route_to('logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <?= view('App\Views\Surat\footer') ?>