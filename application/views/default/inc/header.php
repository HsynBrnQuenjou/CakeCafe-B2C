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
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__cart">
        <div class="offcanvas__cart__links">
            <a href="#" class="search-switch"><img src="assets/img/icon/search.png" alt=""></a>
            <a href="#"><img src="assets/img/icon/heart.png" alt=""></a>
        </div>
        <div class="offcanvas__cart__item">
            <a href="#"><img src="assets/img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="cart__price">Cart: <span>$0.00</span></div>
        </div>
    </div>
    <div class="offcanvas__logo">
        <a href="./index.html"><img src=assets/"img/logo.png" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__option">
        <ul>
            <li>USD <span class="arrow_carrot-down"></span>
                <ul>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </li>
            <li>ENG <span class="arrow_carrot-down"></span>
                <ul>
                    <li>Spanish</li>
                    <li>ENG</li>
                </ul>
            </li>
            <li><a href="#">Sign in</a> <span class="arrow_carrot-down"></span></li>
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
                        <!-- GEREK YOK -->
                        <div class="header__top__left">
                            <ul><!--
                                <li>USD <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li>EUR</li>
                                        <li>USD</li>
                                    </ul>
                                </li>
                                <li>ENG <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li>Spanish</li>
                                        <li>ENG</li>
                                    </ul>
                                </li> -->
                                <li><a href="#">Sign in</a> <span class="arrow_carrot-down"></span></li>
                            </ul>
                        </div>
                        <div class="header__logo">
                            <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url('default/uploads/img/'.$setting->site_logo); ?>" alt="<?php echo $setting->site_baslik; ?>">
                            </a> <!-- /assets/"img/logo.png -->
                        </div>



                        <div class="header__top__right">
                            <div class="header__top__right__links">
                                <a href="#" class="search-switch"><img src="<?php echo base_url('default/uploads/img/icon/search.png'); ?>" alt=""></a>
                                <a href="#"><img src="<?php echo base_url('default/uploads/img/icon/heart.png'); ?>" alt=""></a>
                            </div>
                            <div class="header__top__right__cart"  >
                                <a href="shoping-cart.html"><img src="<?php echo base_url('default/uploads/img/icon/cart.png'); ?>" alt=""> <span>0</span></a>
                                <div class="cart__price">Cart: <span>$0.00</span></div>
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
                        <li class="<?php if ($current_path == 'pages/about' || $current_path == '/about/') echo 'active'; ?>"><a href="<?php echo base_url('pages/about'); ?>">Hakkımızda</a></li>
                        <li class="<?php if (strpos($current_path, '/pages/shop') !== false) echo 'active'; ?>"><a href="<?php echo base_url('pages/shop'); ?>">Ürünlerimiz</a></li>
                        <li class="<?php if (strpos($current_path, '/blog_view.php') !== false || strpos($current_path, '/shoping-cart.php') !== false || strpos($current_path, '/checkout.php') !== false || strpos($current_path, '/wisslist.php') !== false || strpos($current_path, '/Class.html') !== false || strpos($current_path, '/blog_details_view.php') !== false) echo 'active'; ?>">
                            <a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="../shoping-cart.php" class="<?php if (strpos($current_path, '/shoping-cart.php') !== false) echo 'active'; ?>">Shoping Cart</a></li>
                                <li><a href="../checkout.php" class="<?php if (strpos($current_path, '/checkout.php') !== false) echo 'active'; ?>">Check Out</a></li>
                                <li><a href="../wisslist.php" class="<?php if (strpos($current_path, '/wisslist.php') !== false) echo 'active'; ?>">Wisslist</a></li>
                                <li class="<?php if (strpos($current_path, '/pages/class') !== false) echo 'active'; ?>"><a href="<?php echo base_url('pages/class'); ?>">Kurslar</a></li>
                                <li class="<?php if (strpos($current_path, '/pages/blog_details') !== false) echo 'active'; ?>"><a href="<?php echo base_url('pages/blog_details'); ?>">Blog detail</a></li>
                            </ul>
                        </li>
                        <li class="<?php if (strpos($current_path, '/pages/blog') !== false) echo 'active'; ?>"><a href="<?php echo base_url('pages/blog'); ?>">Blog</a></li>
                        <li class="<?php if (strpos($current_path, '/pages/contact') !== false) echo 'active'; ?>"><a href="<?php echo base_url('pages/contact'); ?>">İletişim</a></li>
                    </ul>
                </nav>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End -->

