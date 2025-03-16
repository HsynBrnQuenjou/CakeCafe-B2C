
<?php $this->load->view('default/inc/header'); ?>
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="<?php echo base_url('default/uploads/img/hero/'.$setting->sabitresim1); ?>">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <?php echo $setting->sabityazi1; ?>
                                <?php echo $setting->sabitbuton1; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="<?php echo base_url('default/uploads/img/hero/'.$setting->sabitresim2); ?>">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <?php echo $setting->sabityazi2; ?>
                                <?php echo $setting->sabitbuton2; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
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

    <!-- Kategoriler -->
    <!-- Categories Section Begin -->
    <div class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">

                    <?php
                    if ($categories) {
                        usort($categories, function($a, $b) {
                            return strcmp($a->katid, $b->katid); //sıralam katid olarak olur, başka içinse katadi vs gibi değiştirebilir
                        });
                        foreach ($categories as $cat) {
                            echo '<div class="categories__item">';
                            echo '  <div class="categories__item__icon">';
                            echo '<a href="#">      <span class="' . $cat->katicon . '"></span></a>';
                            echo '<h5>' . $cat->katadi . '</h5>';
                            echo '  </div>';
                            echo '</div>';
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Categories Section End -->


    <!-- Ürünler -->
    <!-- Product Section Begin -->

    <section class="product spad">
        <div class="container">
            <?php if ($products  && !empty($products)) { ?>
            <div class="row">

                <?php

                        foreach ($products as $pro) {
                            ?>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="default/uploads/img/shop/product-1.jpg" alt="">
                                        <div class="product__label">
                                            <span>Cupcake</span>
                                        </div>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="#"><?php echo $pro->urun_adi; ?></a></h6>
                                        <div class="product__item__price"><?php echo $pro->urun_fiyat; ?>$</div>
                                        <div class="cart_add">
                                            <a href="#">Sepete ekle</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }

                ?>


            </div>

            <div class="row">
                <div class="col-lg-12 text-center"><!-- style="background: #f08632; color:white" -->
                    <a class="product-btn" href="#">Tüm Ürünlerimiz</a>
                </div>
            </div>
            <?php } else { ?>
                <section class="testimonial spad">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <p>Henüz ürün bulunmamaktadır.</p>
                            </div>
                        </div>
                    </div>
                </section>
            <?php } ?>

        </div>
    </section>
    <!-- Product Section End -->

    <!--SİLİNDİ-->

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

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-0">
                    <div class="instagram__text">
                        <div class="section-title">
                            <span>Follow us on instagram</span>
                            <h2>Sweet moments are saved as memories.</h2>
                        </div>
                        <h5><i class="fa fa-instagram"></i>@sweetcakecafe</h5>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="default/uploads/img/instagram/instagram-1.jpg" alt="<?php echo $setting->kucukresim1; ?>"> <!-- instagram-1.jpg -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="<?php echo base_url('default/uploads/img/instagram/'.$setting->kucukresim2); ?>" alt="<?php echo $setting->kucukresim2; ?>">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="<?php echo base_url('default/uploads/img/instagram/'.$setting->kucukresim3); ?>" alt="<?php echo $setting->kucukresim3; ?>">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="<?php echo base_url('default/uploads/img/instagram/'.$setting->kucukresim4); ?>" alt="<?php echo $setting->kucukresim4; ?>">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="<?php echo base_url('default/uploads/img/instagram/'.$setting->kucukresim5); ?>" alt="<?php echo $setting->kucukresim5; ?>">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="<?php echo base_url('default/uploads/img/instagram/'.$setting->kucukresim1); ?>" alt="<?php echo $setting->kucukresim6; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- SİLİNDİ CONTACT KISMINDA HARİTA OLMASDI DAHA DOĞRU -->
    <!-- Map Begin -->

    <!-- Map End -->

<?php $this->load->view('default/inc/footer'); ?>