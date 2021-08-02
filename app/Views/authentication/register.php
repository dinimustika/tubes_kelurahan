
<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from keenitsolutions.com/products/html/educavo/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 May 2021 02:38:15 GMT -->
<head> 
        <!-- meta tag -->
        <meta charset="utf-8">
        <title><?=lang('Auth.register')?></title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="../assets/images/fav-orange.png">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="../assets/css/off-canvas.css">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="../assets/fonts/linea-fonts.css">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="../assets/fonts/flaticon.css">
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
    <body class="defult-home">
         <!--Preloader area start here-->
         <div id="loader" class="loader orange-color">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="assets/images/Lambang_Kota_Padang_Sidempuan.jpg" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here-->

        <div class="main-content">
    		<!-- My Account Section Start -->
    		<div class="rs-login pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="noticed">
                        <div class="main-part">                           
                            <div class="method-account">
                                <h2 class="title mb-10">Create New Account</h2>
                                <?= view('Myth\Auth\Views\_message_block') ?>
                                <form method="post" action="<?= route_to('register') ?>">                               
                                    <div class="row clearfix">    
                                    <?= csrf_field() ?>                                
                                        <!-- Form Group -->
                                        <div class="form-group col-lg-12 mb-25">
                                            <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                            name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                                        </div>
                                        
                                        <!-- Form Group -->
                                        <div class="form-group col-lg-12">
                                            <input type="text" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                                        </div>
                                        
                                        <!-- Form Group -->
                                        <div class="form-group col-lg-12">
                                            <input type="password" name="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                                        </div>
                                        
                                        <!-- Form Group -->
                                        <div class="form-group col-lg-12">
                                            <input type="password" name="pass_confirm" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                                        </div>    
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                                            <button type="submit" class="readon register-btn"><?=lang('Auth.register')?></button>
                                        </div>
                                        
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="users"><?=lang('Auth.alreadyRegistered')?> <a href="<?= route_to('login') ?>"><?=lang('Auth.signIn')?></a></div>
                                        </div>
                                        
                                    </div>
                                    
                                </form>
                            </div>
                            
                        </div>
                    </div>
        <!-- End Login Section --> 
        </div>
        </div>

        </div> 
        <!-- Main content End --> 

        <!-- modernizr js -->
        <script src="../assets/js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="../assets/js/jquery.min.js"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="../assets/js/bootstrap.min.js"></script>
        <!-- Menu js -->
        <script src="../assets/js/rsmenu-main.js"></script> 
        <!-- op nav js -->
        <script src="../assets/js/jquery.nav.js"></script>
        <!-- wow js -->
        <script src="../assets/js/wow.min.js"></script>     
        <!-- plugins js -->
        <script src="../assets/js/plugins.js"></script>
        <!-- magnific popup js -->
        <script src="../assets/js/jquery.magnific-popup.min.js"></script>  
        <!-- contact form js -->
        <script src="../assets/js/contact.form.js"></script>
        <!-- main js -->
        <script src="../assets/js/main.js"></script>
    </body>

<!-- Mirrored from keenitsolutions.com/products/html/educavo/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 May 2021 02:38:15 GMT -->
</html>