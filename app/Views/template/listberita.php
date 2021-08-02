
<!DOCTYPE html>
<html lang="zxx">  
    
<!-- Mirrored from keenitsolutions.com/products/html/educavo/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 May 2021 02:36:39 GMT -->
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Educavo - Education HTML Template</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="../assets/images/fav.png">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.css">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="../assets/css/off-canvas.css">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="../assets/fonts/linea-fonts.css">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="../assets/fonts/flaticon.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="../assets/css/magnific-popup.css">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="../assets/css/rsmenu-main.css">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="../assets/css/rs-spacing.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="../style.css"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
<body class="default-home">
	<div class="main-content">
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
                            </div>
                            
                            <div class="col-lg-5 lg-pl-0">
                                <div class="events-short mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="date-part">
                                        <span class="month">June</span>
                                        <div class="date">20</div>
                                    </div>
                                    <div class="content-part">
                                        <div class="categorie">
                                            <a href="#">Math</a> & <a href="#">English</a>
                                        </div>
                                        <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Learning</a></h4>
                                    </div>
                                </div>
                                <div class="events-short mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                    <div class="date-part">
                                        <span class="month">June</span>
                                        <div class="date">21</div>
                                    </div>
                                    <div class="content-part">
                                        <div class="categorie">
                                            <a href="#">Math</a> & <a href="#">English</a>
                                        </div>
                                        <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Learning</a></h4>
                                    </div>
                                </div>
                                <div class="events-short mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                                    <div class="date-part">
                                        <span class="month">June</span>
                                        <div class="date">22</div>
                                    </div>
                                    <div class="content-part">
                                        <div class="categorie">
                                            <a href="#">Math</a> & <a href="#">English</a>
                                        </div>
                                        <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Learning</a></h4>
                                    </div>
                                </div>
                                <div class="events-short wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                                    <div class="date-part">
                                        <span class="month">June</span>
                                        <div class="date">23</div>
                                    </div>
                                    <div class="content-part">
                                        <div class="categorie">
                                            <a href="#">Math</a> & <a href="#">English</a>
                                        </div>
                                        <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Learning</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
	</div>

</body>
<?php 
include 'footer.php';
?>