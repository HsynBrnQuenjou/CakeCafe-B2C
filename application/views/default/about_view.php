<?php $this->load->view('default/inc/header'); ?>

<body>



    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Hakkımızda</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="index.php">Anasayfa</a>
                        <span>Hakkımızda</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__video set-bg" src="default/uploads/img/about-video.jpg">
                        <a href="https://www.youtube.com/watch?v=8PJ3_p7VqHw&list=RD8PJ3_p7VqHw&start_radio=1"
                        class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>About Cake shop</span>
                            <h2>Cakes and bakes from the house of Queens!</h2>
                        </div>
                        <p>The "Cake Shop" is a Jordanian Brand that started as a small family business. The owners are
                        Dr. Iyad Sultan and Dr. Sereen Sharabati, supported by a staff of 80 employees.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__bar">
                        <div class="about__bar__item">
                            <p>Cake design</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="95"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Cake Class</p>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="80"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Cake Recipes</p>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="90"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->


    <!-- YORUMLAR -->
    <!-- Testimonial Section Begin -->
    <?php if($comments && !empty($comments)){ ?>
        <section class="testimonial spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <span>Testimonial</span>
                            <h2>Our client say</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="testimonial__slider owl-carousel">
                        <?php foreach ($comments as $com){ ?>
                            <div class="col-lg-6">
                                <div class="testimonial__item">
                                    <div class="testimonial__author">
                                        <div   class="testimonial__author__pic">
                                            <img src="<?php echo $com->yorumuyefoto; ?> " alt=""><!-- default/assets/uploads/img/testimonial/ta-2.jpg -->
                                        </div>
                                        <div class="testimonial__author__text">
                                            <h5><?php echo $com->yorumisim; ?></h5>
                                            <span><?php echo $com->yorumuyeyer; ?></span>
                                        </div>
                                    </div>
                                    <!-- <div class="rating">
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star-half_alt"></span>
                                    </div> -->
                                    <p><?php echo $com->yorumicerik; ?></p>
                                </div>
                            </div>
                        <?php } ?>

                    </div>

                </div>
            </div>
        </section>
    <?php } else { ?>
        <section class="testimonial spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>Henüz yorum bulunmamaktadır.</p>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- Testimonial Section End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="section-title">
                        <span>Our team</span>
                        <h2>Sweet Baker </h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <div class="team__btn">
                        <a href="#" class="primary-btn">Join Us</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if ($workers) {
                    usort($workers, function($a, $b) {
                        return $a->calisan_id - $b->calisan_id;
                    });

                    foreach ($workers as $worker) {
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="team__item set-bg" data-setbg="<?php echo base_url('default/uploads/img/team/' . htmlspecialchars($worker->calisan_foto)); ?>">
                                <div class="team__item__text">
                                    <h6><?php echo htmlspecialchars($worker->calisan_adi) . ' ' . htmlspecialchars($worker->calisan_soyadi); ?></h6>
                                    <span><?php echo htmlspecialchars($worker->calisan_gorevi); ?></span>
                                    <div class="team__social">
                                        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                        <a href="https://www.x.com/"><i class="fa fa-twitter"></i></a>
                                        <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                                        <a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>
                                    </div>
<!--                                    <div class="team__social">-->
<!--                                        --><?php
//                                        if ($worker->calisan_sosyal) {
//                                            $sosyaller = json_decode($worker->calisan_sosyal);
//                                            if ($sosyaller && is_array($sosyaller)) {
//                                                foreach ($sosyaller as $sosyal) {
//                                                    if (isset($sosyal->soslink) && isset($sosyal->sosikon)) {
//                                                        echo '<a href="' . htmlspecialchars($sosyal->soslink) . '"><i class="' . htmlspecialchars($sosyal->sosikon) . '"></i></a>';
//                                                    }
//                                                }
//                                            }
//                                        }
//                                        ?>
<!--                                    </div>-->
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

</body>

    <!-- Footer Section Begin -->
<?php $this->load->view('default/inc/footer'); ?>
<!-- Footer Section End -->
