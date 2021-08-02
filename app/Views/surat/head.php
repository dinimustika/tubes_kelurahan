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
                <a class="nav-link" href="../user/">
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
                        <a class="collapse-item" href="<?= route_to('logout') ?>">Logout</a>
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
                    <span>Riwayat</span>
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
                </nav>
                <!-- End of Topbar -->
