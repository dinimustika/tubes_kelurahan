<?php 
include 'head.php';
?>
 <body class="defult-home">
        
        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="assets/images/Lambang_Kota_Padang_Sidempuan.jpg" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here--> 


        <!--Full width header Start-->
        <div class="full-width-header header-style1 home1-modifiy">
            <!--Header Start-->
            <header id="rs-header" class="rs-header">
                <!-- Topbar Area Start -->
                <div class="topbar-area dark-parimary-bg">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-md-7">
                                <ul class="topbar-contact">
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <a href="mailto:timbangan@sumut.co.id">timbangan@sumut.co.id</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-location"></i>
                                        Jl. Pahlawan no.10
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-5 text-right">
                                <ul class="topbar-right">
                                    <li class="login-register">
                                        <i class="fa fa-sign-in"></i>
                                        <?php if(logged_in()): ?>
                                        <a href="logout">Log Out</a>
                                        <?php else :?>
                                            <a href="login">Log In</a>
                                        <?php endif?>
                                    </li>
                                    <li class="btn-part">
                                        <a class="apply-btn" href="#categori">Urus Surat Sekarang</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Topbar Area End -->

                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-2">
                              <div class="logo-cat-wrap">
                                  <div class="logo-part">
                                      <a href="index.html">
                                          <img src="assets/images/Lambang_Kota_Padang_Sidempuan.jpg" alt="">
                                      </a>
                                  </div>
                              </div>
                            </div>
                            <div class="col-lg-8 text-right">
                                <div class="rs-menu-area">
                                    <div class="main-menu">
                                      <div class="mobile-menu">
                                          <a class="rs-menu-toggle">
                                              <i class="fa fa-bars"></i>
                                          </a>
                                      </div>
                                      <nav class="rs-menu">
                                         <ul class="nav-menu">
                                            <li class="rs-mega-menu mega-rs menu-item-has-children current-menu-item"> <a href="#">Home</a>
                                            </li>
                                             <li class="menu-item-has-children">
                                                 <a href="#">About</a>
                                                 <ul class="sub-menu">
                                                     <li><a href="#about">About</a> </li>
                                                 </ul>
                                             </li>
                                             <li class="menu-item-has-children">
                                                 <a href="#service">Layanan</a>
                                                 <ul class="sub-menu">
                                                     <li class="menu-item-has-children right">
                                                         <a href="../user">Surat</a>
                                                         <ul class="sub-menu right">
                                                            <li><a href="../ktp/" class="collapse-item">Urus Surat <br>Keterangan KTP</a></li>
                                                            <li><a href="../akta/" class="collapse-item">Urus Surat <br>Keterangan Akta</a></li>
                                                            <li><a href="../penghasilan/" class="collapse-item">Urus Surat <br>Keterangan Penghasilan</a></li>
                                                            <li><a href="../kematian/" class="collapse-item">Urus Surat <br>Keterangan Kematian</a></li>
                                                            <li><a href="../cerai/" class="collapse-item">Urus Surat <br>Keterangan Cerai</a></li>
                                                         </ul>
                                                     </li>
                                                     <li class="menu-item-has-children">
                                                         <a href="#">Perizinan</a>
                                                         <ul class="sub-menu right">
                                                             <li><a href="../SIMB/">SIMB</a></li>
                                                             <li><a href="../SIUP/">SIUP</a></li>
                                                         </ul>
                                                     </li>
                                                     <li class="menu-item-has-children">
                                                         <a href="#">Gallery</a>
                                                         <ul class="sub-menu right">
                                                             <li><a href="gallery-style1.html">Galeri Kelurahan</a></li>
                                                         </ul>
                                                     </li>
                                                     <li class="menu-item-has-children">
                                                         <a href="#">Others</a>
                                                         <ul class="sub-menu right">
                                                             <li><a href="#faq">FAQ</a></li>
                                                         </ul>
                                                     </li>
                                                 </ul>
                                             </li>

                                             <li class="menu-item-has-children">
                                                 <a href="#">Blog</a>
                                                 <ul class="sub-menu">
                                                     <li class="menu-item-has-children">
                                                         <a href="#berita">Berita Kelurahan</a>
                                                     </li>
                                                 </ul>
                                             </li>

                                             <li class="menu-item-has-children">
                                                 <a href="#">Contact</a>
                                                 <ul class="sub-menu">
                                                    <li><a href="#email">Kontak Kelurahan</a> </li>
                                                 </ul>
                                             </li>
                                         </ul> <!-- //.nav-menu -->
                                      </nav>                                         
                                    </div> <!-- //.main-menu -->                                
                                </div>
                            </div>
                            <div class="col-lg-2 text-right">
                                <div class="expand-btn-inner">
                                    <ul>
                                        <li>
                                            <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <span>
                                        <a id="nav-expander" class="nav-expander style3">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End --> 

                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <div id="nav-close">
                            <div class="line">
                                <span class="line1"></span><span class="line2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-text">
                        <p>Kelurahan Timbangan, Padang Sidempuan</p>
                    </div>
                    <div class="canvas-contact">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->

		<!-- Main content Start -->
        <div class="main-content">
            <!-- Banner Section Start -->
            <div id="rs-banner" class="rs-banner style1">
                <div class="container">
                    <div class="banner-content text-center">
                        <h1 class="banner-title capitalize wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="3000ms">Kelurahan Timbangan Padang Sidempuan</h1>
                        <div class="desc mb-35 wow wow fadeInRight" data-wow-delay="900ms" data-wow-duration="3000ms">Due to COVID-19 cases that has been increasing so high, we are offering a better services for our citizen. </div>
                        <div class="banner-btn wow fadeInUp" data-wow-delay="1500ms" data-wow-duration="2000ms">
                            <a class="readon banner-style" href="#categori">Jenis Layanan</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->

            <!-- About Section Start -->
            <div id="rs-about" class="rs-about style1 pb-100 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 order-last">
                            <div class="notice-bord style1">
                                <h4 class="title">Papan Informasi</h4>
                                <ul>
                                    <?php foreach($data["event"]->getResultArray() as $surt) : ?>
                                    <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                        <div class="date"><span><?= $surt['tgl_event'];?></span></div>
                                        <div class="desc"><?= $surt['isi'];?></div>
                                    </li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 pr-50 md-pr-15">
                            <div class="about-part">
                                <div class="sec-title mb-40" id="about">
                                    <div class="sub-title primary wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">Tentang Kelurahan</div>
                                    <h2 class="title wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">Kelurahan Timbangan, Padang Sidempuan</h2>
                                    <div class="desc wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">Timbangan adalah salah satu kelurahan di Kecamatan Padang Sidimpuan Utara, Padang Sidempuan, Sumatra Utara, Indonesia. Keberadaan website ini diharapkan akan membuat mobilitas masyarakat berkurang dikarenakan lonjakan angka COVID 19 di Indonesia.</div>
                                </div>
                                <div class="sign-part wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                                    <div class="img-part">
                                        <img src="assets/images/about/ceo.png" alt="CEO Image">
                                    </div>
                                    <div class="author-part">
                                        <span class="sign mb-10"><img src="assets/images/about/sign.png" alt="Sign"></span>
                                        <span class="post">Pak Lurah</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

           <!-- Categories Section Start -->
            <div id="categori" class="rs-categories gray-bg style1 pt-94 pb-70 md-pt-64 md-pb-40">
                <div class="container">
                    <div class="row y-middle mb-50 md-mb-30">
                        <div class="col-md-6 sm-mb-30">
                            <div class="sec-title">
                                <div class="sub-title primary" id="detail">Layanan</div>
                                <h2 class="title mb-0">Layanan yang Tersedia</h2>
                            </div>
                        </div>
                    
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <a class="categories-item" href="../ktp/">
                                <div class="icon-part">
                                    <img src="assets/images/icons/KTP.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Surat Keterangan KTP</h4>
                                    <span class="courses"></span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                            <a class="categories-item" href="../akta/">
                                <div class="icon-part">
                                    <img src="assets/images/icons/akta.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Surat Keterangan Akta</h4>
                                    <span class="courses"></span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                            <a class="categories-item" href="../penghasilan/">
                                <div class="icon-part">
                                    <img src="assets/images/icons/penghasilan.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Surat Keterangan Penghasilan</h4>
                                    <span class="courses"></span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <a class="categories-item" href="../kematian/">
                                <div class="icon-part">
                                    <img src="assets/images/icons/kematian.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Surat Keterangan Kematian</h4>
                                    <span class="courses"></span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                            <a class="categories-item" href="../cerai/">
                                <div class="icon-part">
                                    <img src="assets/images/icons/cerai.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Surat Keterangan Cerai</h4>
                                    <span class="courses"></span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                            <a class="categories-item" href="../simb/">
                                <div class="icon-part">
                                    <img src="assets/images/icons/SIMB.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Surat Izin Mendirikan Bangunan (SIMB)</h4>
                                    <span class="courses"></span>
                                </div>
                            </a>
                        </div>  
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                            <a class="categories-item" href="../siup/">
                                <div class="icon-part">
                                    <img src="assets/images/icons/SIUP.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Surat Izin Usaha Perdagangan (SIUP)</h4>
                                    <span class="courses"></span>
                                </div>
                            </a>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- Categories Section End -->

            <!-- Faq Section Start -->
            <div class="rs-faq-part style1 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 padding-0">
                          <div class="main-part">
                            <div class="title mb-40 md-mb-15" id="faq">
                                <h2 class="text-part">Frequently Asked Questions</h2>
                            </div>
                              <div class="faq-content">
                                  <div id="accordion" class="accordion">
                                     <div class="card">
                                         <div class="card-header">
                                             <a class="card-link" data-toggle="collapse" href="#collapseOne">Layanan apa saja yang ada?</a>
                                         </div>
                                         <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                             <div class="card-body">
                                              Layanan yang tersedia Pengurusan Surat berupa Surat keterangan KTP, Surat keterangan Akta, Surat keterangan Penghasilan, Surat keterangan Kematian, Surat keterangan Cerai, serta Pengurusan Perizinan berupa SIMB, dan SIUP
                                             </div>
                                         </div>
                                     </div>
                                      <div class="card">
                                          <div class="card-header">
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">Berapa lama proses pengurusan surat?</a>
                                          </div>
                                          <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                                Proses pengurusan surat akan memakan waktu 2X24 jam di hari kerja.
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                          <div class="card-header">
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">Bagaimana mekanisme pengurusan surat?</a>
                                          </div>
                                          <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                                Setelah Anda mengisi data, Admin akan mengecek data tersebut dan memverifikasi. Jika sudah benar maka akan disetujui, dan jika salah maka akan ditolak.
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-lg-6 padding-0">
                            <div class="img-part media-icon">
                                <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- faq Section Start -->
           <!-- Section bg Wrap 2 start -->
            <div class="bg2">
                <!-- Blog Section Start -->
                <div id="berita" class="rs-blog style1 pt-94 pb-100 md-pt-64 md-pb-70">
                    <div class="container">
                        <div class="sec-title mb-60 md-mb-30 text-center">
                            <div class="sub-title primary">News Update </div>
                            <h2 class="title mb-0">Latest News & Events</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-7 col-md-12 pr-75 md-pr-15 md-mb-50">
                                <?php foreach($data["beritas"] as $surt) : ?>
                                <div class="row align-items-center no-gutter white-bg blog-item mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="col-md-6">
                                        <div class="image-part">
                                            <a href="#"><img src="<?=base_url('assets/images/'.$surt['gambar']);?>" width="100px" height="auto"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blog-content">
                                            <ul class="blog-meta">
                                               
                                                <li><i class="fa fa-calendar"></i><?= $surt['tgl_terbit']; ?></li>
                                            </ul>
                                            <h3 class="title"><a href="#"><?= $surt['title'];?></a></h3>
                                            <div class="btn-part">
                                                <a class="readon-arrow" href="<?= base_url('berita/detail/' . $surt['id_berita']);?>">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>

                            <div style="float: right">
                            <?php echo $data["pager"]->links('default', 'custom_pager') ?>
                            </div>
                                <div class="btn-part">
                                    <a class="readon-arrow" href="<?= base_url('berita/list/');?>">View All</a>
                                </div>
                            </div>
                            
                            <div class="col-lg-5 lg-pl-0">
                                <?php foreach($data["event"]->getResultArray() as $surt) : ?>
                                <div class="events-short mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="date-part">
                                        <span class="month"><i class="fa fa-calendar"></i><?= $surt['tgl_event'];?></span>
                                    </div>
                                    <div class="content-part">
                                        <div class="categorie">
                                            <h6><i class="fa fa-user"></i> <?= $surt['name'];?></h6>
                                        </div>
                                        <h4 class="title mb-0"><?= $surt['isi'];?></h4>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Section End -->

                <!-- Newsletter section start -->
                <div class="rs-newsletter style1 mb--124 sm-mb-0 sm-pb-70">
                    <div class="container">
                        <div class="newsletter-wrap">
                            <div class="row y-middle">
                                <div class="col-md-6 sm-mb-30">
                                    <div class="sec-title">
                                        <div class="sub-title white-color">Newsletter</div>
                                        <h2 class="title mb-0 white-color">Subscribe Us to join <br> Our Community </h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <form class="newsletter-form" id="email">
                                        <input type="email" name="email" placeholder="Enter Your Email" required="">
                                        <button type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Newsletter section end -->
            </div>
            <!-- Section bg Wrap 2 End -->
        </div> 
        <!-- Main content End -->
<?php 
include 'footer.php';
?>