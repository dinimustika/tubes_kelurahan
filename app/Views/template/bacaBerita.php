
<!DOCTYPE html>
<html lang="zxx">  
    
<!-- Mirrored from keenitsolutions.com/products/html/educavo/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 May 2021 02:36:39 GMT -->
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
		<title><?=$berita['title']?></title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/fav.png">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.min.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="../../assets/css/animate.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="../../assets/css/owl.carousel.css">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="../../assets/css/slick.css">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="../../assets/css/off-canvas.css">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="../../assets/fonts/linea-fonts.css">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="../../assets/fonts/flaticon.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="../../assets/css/magnific-popup.css">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="../../assets/css/rsmenu-main.css">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="../../assets/css/rs-spacing.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="../../style.css"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="../../assets/css/responsive.css">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
<body class="defult-home">
        
        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="../../assets/images/Lambang_Kota_Padang_Sidempuan.jpg" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here--> 


		<!-- Main content Start -->
        <div class="main-content">
            <!-- Banner Section Start -->
            <div id="rs-banner" class="rs-banner style1">
                <div class="container">
                    <div class="banner-content text-center">
                        <h1 class="banner-title capitalize wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="3000ms">Kelurahan Kayu Ombun Padang Sidempuan</h1>
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
                                    <?php foreach($event as $surt) : ?>
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
                                    <div class="sub-title primary wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms"><i class="fa fa-calendar"></i> <?= $berita['tgl_terbit']; ?> <i class="fa fa-user"></i> <?=$berita['name']?>
                                    <hr>
                                    <img src="<?= base_url('../assets/images/'.$berita['gambar']);?>" width="200px">
                                	</div>
                                    <h2 class="title wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms"><?=$berita['title']?></h2>
                                    <div class="desc wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms"><?=$berita['berita']?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->
        </div>
     <!-- Footer Start -->
 <footer id="rs-footer" class="rs-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                            <h4 class="widget-title">Email</h4>
                            <ul class="site-map">
                                <li><a> 
                                    <i class="flaticon-email"></i>
                                kayuombun@sumut.co.id</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                            <h4 class="widget-title">Nomor Telpon</h4>
                            <ul class="site-map">
                                <li><a>
                                 <i class="flaticon-call"></i>
                                    08123456789</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                            <h4 class="widget-title">Nomor WhatsApp</h4>
                            <ul class="site-map">
                                 <li><a>
                                 <i class="flaticon-call"></i>
                                    08123456789</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                            <h4 class="widget-title">Address</h4>
                            <ul class="address-widget">
                                <li>
                                    <i class="flaticon-location"></i>
                                    <div class="desc">Jl. Pahlawan no.10</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">                    
                    <div class="row y-middle">
                        <div class="col-lg-4 md-mb-20">
                            <div class="footer-logo md-text-center">
                                <h5>Kelurahan Kayu Ombun</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-20">
                            <div class="copyright text-center md-text-left">
                                <p>&copy; 2021 All Rights Reserved. Developed By Kelompok 8 MBSD Kom B</p>
                            </div>
                        </div>
                        <div class="col-lg-4 text-right md-text-left">
                            <ul class="footer-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        <!-- modernizr js -->
        <script src="../../assets/js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="../../assets/js/jquery.min.js"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="../../assets/js/bootstrap.min.js"></script>
        <!-- Menu js -->
        <script src="../../assets/js/rsmenu-main.js"></script> 
        <!-- op nav js -->
        <script src="../../assets/js/jquery.nav.js"></script>
        <!-- owl.carousel js -->
        <script src="../../assets/js/owl.carousel.min.js"></script>
        <!-- Slick js -->
        <script src="../../assets/js/slick.min.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="../../assets/js/isotope.pkgd.min.js"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="../../assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- wow js -->
        <script src="../../assets/js/wow.min.js"></script>
        <!-- Skill bar js -->
        <script src="../../assets/js/skill.bars.jquery.js"></script>
        <script src="../../assets/js/jquery.counterup.min.js"></script>        
         <!-- counter top js -->
        <script src="../../assets/js/waypoints.min.js"></script>
        <!-- video js -->
        <script src="../../assets/js/jquery.mb.YTPlayer.min.js"></script>
        <!-- magnific popup js -->
        <script src="../../assets/js/jquery.magnific-popup.min.js"></script>      
        <!-- plugins js -->
        <script src="../../assets/js/plugins.js"></script>
        <!-- contact form js -->
        <script src="../../assets/js/contact.form.js"></script>
        <!-- main js -->
        <script src="../../assets/js/main.js"></script>
    </body>

<!-- Mirrored from keenitsolutions.com/products/html/educavo/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 May 2021 02:37:36 GMT -->
</html>
<!-- 
<div class="container">
		<h2><?=$berita['title']?></h2><br>
	<div class="card">
		<div class="card-body">
			  <div class="form-row">
				<div class="form-group col-md-3">
				    <img src="<?= base_url('../assets/images/'.$berita['gambar']);?>" width="200px">
				</div>
				<div class="form-group col-md-6">
			    	<h2><?=$berita['title']?></h2>
			    	<h6><i class="fa fa-user"></i> <?=$berita['name']?> || <i class="fa fa-calendar"></i> <?= $berita['tgl_terbit']; ?></h6>
			    </div>
			  </div>
			  <div class="form-row">
			  	<div class="form-group col-md-3">
			  		<div class="col-lg-4 order-last">
                        <div class="notice-bord style1">
                            <h4 class="title">Papan Informasi</h4>
                            <ul>
                                <?php foreach($event as $surt) : ?>
                                <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="date"><span><?= $surt['tgl_event'];?></span></div>
                                    <div class="desc"><?= $surt['isi'];?></div>
                                </li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

			  	</div>
			  	<div class="form-group col-md-6">
			    	<textarea class="form-control" rows="3" name="isi"><?=$berita['berita']?></textarea>
			  	</div>
			</div>
		</div>
	</div>
</div> -->