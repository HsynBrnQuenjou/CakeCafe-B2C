<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $setting->site_baslik; ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>default/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>default/assets/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>default/assets/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>default/assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>default/assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>default/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>default/assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>default/assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>default/assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>default/assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>default/assets/sweetalert/sweetalert2.css">
<!--    <link rel="icon" type="image/png" sizes="16x16" href="default/uploads/img/icon/favicon.png" type="image/x-icon">-->
<!--    <link rel="icon" type="image/png" sizes="16x16" href="--><?php //echo base_url('default/uploads/img/icon/favicon.png'); ?><!--">-->
</head>

<body>
<!-- Page Preloder -->
<!--<div id="preloder">-->
<!--    <div class="loader"></div>-->
<!--</div>-->

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__cart">
        <div class="offcanvas__cart__links">
            <a href="#" class="search-switch"><img src="<?php echo base_url('default/uploads/img/icon/search.png');?>" alt=""></a>
            <a href="<?php echo base_url('pages/wishlist'); ?>"><img src="<?php echo base_url('default/uploads/img/icon/heart.png');?>" alt=""></a>
        </div>
        <div class="offcanvas__cart__item">
            <a href="<?php echo base_url('pages/shoping_cart'); ?>"><img src="<?php echo base_url('default/uploads/img/icon/cart.png');?>" alt=""> <span>0</span></a>
            <div class="cart__price">Sepet: <span>0.00₺</span></div>
        </div>
    </div>
    <div class="offcanvas__logo">
        <a href="<?php echo base_url();?>"><img src="<?php echo base_url('default/uploads/img/logo.png');?>" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__option">
        <ul>
            <li><a href="#">Kayıt Ol</a></li>
            <li><a href="#">Üye Girişi </a></li>
        </ul>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header__top__inner">
                        <div class="header__top__left">
                            <ul>
                                <li><a href="#">Kayıt Ol</a></li>
                                <li><a href="#">Üye Girişi </a></li>
                            </ul>
                        </div>
                        <div class="header__logo">
                            <a href="<?php echo base_url();?>"><img src="<?php echo base_url('default/uploads/img/logo.png');?>" alt=""></a>
                        </div>
                        <div class="header__top__right">
                            <div class="header__top__right__links">
                                <a href="#" class="search-switch"><img src="<?php echo base_url('default/uploads/img/icon/search.png');?>" alt=""></a>
                                <a href="<?php echo base_url('pages/wishlist'); ?>"><img src="<?php echo base_url('default/uploads/img/icon/heart.png');?>" alt=""></a>
                            </div>
                            <div class="header__top__right__cart">
                                <a href="<?php echo base_url('pages/shoping_cart'); ?>"><img src="<?php echo base_url('default/uploads/img/icon/cart.png');?>" alt=""> <span>0</span></a>
                                <div class="cart__price">Sepet: <span>0.00₺</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <?php
                        $current_url = $_SERVER['REQUEST_URI'];
                        $base_path = parse_url(base_url(), PHP_URL_PATH);
                        $current_path = str_replace($base_path, '/', $current_url);
                        ?>
                        <li class="<?php if ($current_path == '/') echo 'active'; ?>"><a href="<?php echo base_url(); ?>">Anasayfa</a></li>
                        <li class="<?php if ($current_path == '/pages/about') echo 'active'; ?>"><a href="<?php echo base_url('pages/about'); ?>">Hakkımızda</a></li>
                        <li class="<?php if (strpos($current_path, 'products') !== false) echo 'active'; ?>"><a href="<?php echo base_url('products'); ?>">Ürünlerimiz</a></li>
                        <li class="<?php if (strpos($current_path, '/pages/shoping_cart') !== false || strpos($current_path, '/pages/checkout') !== false || strpos($current_path, '/pages/wishlist') !== false || strpos($current_path, '/pages/courses') !== false || strpos($current_path, '/pages/blog_details') !== false) echo 'active'; ?>">
                            <a href="#">Sayfalar</a>
                            <ul class="dropdown">
                                <li class="<?php if (strpos($current_path, '/pages/shoping_cart') !== false) echo 'active'; ?>"><a href="<?php echo base_url('pages/shoping_cart'); ?>">Sepet</a></li>
                                <li class="<?php if (strpos($current_path, '/pages/checkout') !== false) echo 'active'; ?>"><a href="<?php echo base_url('pages/checkout'); ?>">Kontrol</a></li>
                                <li class="<?php if (strpos($current_path, '/pages/wishlist') !== false) echo 'active'; ?>"><a href="<?php echo base_url('pages/wishlist'); ?>">İstek Listesi</a></li>
                                <li class="<?php if (strpos($current_path, '/pages/courses') !== false) echo 'active'; ?>"><a href="<?php echo base_url('pages/courses'); ?>">Kurslar</a></li>
                                <li class="<?php if (strpos($current_path, '/blog/blog_details') !== false) echo 'active'; ?>"><a href="<?php echo base_url('blog/blog_details'); ?>">Blog detay</a></li>
                            </ul>
                        </li>
                        <li class="<?php if (strpos($current_path, '/blog') !== false) echo 'active'; ?>"><a href="<?php echo base_url('blog'); ?>">Blog</a></li>
                        <li class="<?php if (strpos($current_path, '/pages/contact') !== false) echo 'active'; ?>"><a href="<?php echo base_url('pages/contact'); ?>">İletişim</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End -->

