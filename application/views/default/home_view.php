
<?php $this->load->view('default/inc/header'); ?>
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="<?php echo base_url('default/uploads/img/hero/'.$setting->sliderresim1); ?>">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <?php echo $setting->slideryazi1; ?>
                                <?php echo $setting->sliderbuton1; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="<?php echo base_url('default/uploads/img/hero/'.$setting->sliderresim2); ?>">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <?php echo $setting->slideryazi2; ?>
                                <?php echo $setting->sliderbuton2; ?>
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
                            <span>Pastanemiz</span>
                            <h2>Lezzetin ve Ustalığın Buluşma Noktası!</h2>
                        </div>
                        <p>Geleneksel tarifleri modern lezzetlerle birleştirerek, damaklarda unutulmaz tatlar bırakıyoruz.
                            "Tatlı Anların Adresi" sadece bir pastane değil, aynı zamanda lezzetin, ustalığın ve paylaşmanın merkezi. Her bir dilimimizde, sıcaklığını ve samimiyetini hissedin.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__bar">
                        <div class="about__bar__item">
                            <p>Pasta Tasarımı</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="95"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Pasta Sınıfı</p>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="80"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Pasta Tarifleri</p>
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

<!--    <section class="product spad">-->
<!--        <div class="container">-->
<!--            --><?php //if ($products  && !empty($products)) { ?>
<!--            <div class="row">-->
<!--            --><?php //foreach ($products as $pro){ ?>
<!--                <div class="col-lg-3 col-md-6 col-sm-6">-->
<!--                    <div class="product__item">-->
<!--                        <a href="--><?php //echo base_url('pages/product_details'); ?><!--">-->
<!--                        <div  class="product__item__pic set-bg" data-setbg="--><?php //echo base_url('default/uploads/img/shop/'.$pro->urun_resim); ?><!--" alt="--><?php //echo $pro->urun_adi; ?><!--">-->
<!--                            <div class="product__label">-->
<!--                                <span>--><?php //echo $pro->urun_kategori; ?><!--</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        </a>-->
<!--                        <div class="product__item__text">-->
<!--                            <h6><a href="--><?php //echo base_url('pages/product_details/'.$pro->urun_sef); ?><!--">--><?php //echo $pro->urun_adi; ?><!--</a></h6>-->
<!--                            <div class="product__item__price">--><?php //echo $pro->urun_fiyat ?><!--₺</div>-->
<!--                            <div class="cart_add">-->
<!--                                <a href="#">Sepete Ekle</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    --><?php //} ?>
<!--                </div>-->
<!--                --><?php //} else { ?>
<!--                    <section class="testimonial spad">-->
<!--                        <div class="container">-->
<!--                            <div class="row">-->
<!--                                <div class="col-lg-12 text-center">-->
<!--                                    <p>Henüz ürün bulunmamaktadır.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </section>-->
<!--                --><?php //} ?>
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

    <section class="product spad">
        <div class="container">
            <?php if ($products && !empty($products)) { ?>
                <div class="row">
                    <?php foreach ($products as $pro) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <a href="<?php echo base_url('products/'.$pro->urun_sef); ?>">
                                    <div class="product__item__pic set-bg" data-setbg="<?php echo base_url('default/uploads/img/shop/'.$pro->urun_resim); ?>";">
                                        <div class="product__label">
                                            <span><?php echo $pro->urun_kategori; ?></span>
                                        </div>
                                    </div>
                                </a>
                                <div class="product__item__text">
                                    <h6><a href="<?php echo base_url('products/'.$pro->urun_sef); ?>"><?php echo $pro->urun_adi; ?></a></h6>
                                    <div class="product__item__price"><?php echo $pro->urun_fiyat ?>₺</div>
                                    <div class="cart_add">
                                        <a href="#">Sepete Ekle</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
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
                        <span>Kalpten Yorumlar</span>
                        <h2>Müşterilerimiz diyor ki</h2>
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
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
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
                            <span>Bizi Instagram'dan Takip Edin</span>
                            <h2>Tatlı anlar hatıra olarak saklanır.</h2>
                        </div>
                        <h5><img src="<?php echo base_url('default/uploads/img/cake-piece.png'); ?>" alt="">&nbsp;<i class="fa fa-instagram"></i>@sweetcake</h5>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="<?php echo base_url('default/uploads/img/instagram/'.$setting->kucukresim1); ?>" alt="<?php echo $setting->kucukresim1; ?>"> <!-- instagram-1.jpg -->
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