<?php 
include 'head.php';
?>
<body class="default-home">
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
	    <!-- Blog Section End -->

</body>
<?php 
include 'footer.php';
?>