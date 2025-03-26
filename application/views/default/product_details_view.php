<?php $this->load->view('default/inc/header'); ?>

<body>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Ürün Detay</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="home_view.php">Home</a>
                        <a href="products_view.php">Shop</a>
                        <span><?php echo $product->urun_adi; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__img">
                        <div class="product__details__big__img">
                            <?php if (isset($product) && !empty($product->urun_resim)): ?>
                                <img class="big_img" src="<?php echo base_url('default/uploads/img/shop/' . $product->urun_resim); ?>" alt="<?php echo $product->urun_adi; ?>">
                            <?php else: ?>
                                <img class="big_img" src="<?php echo base_url('default/uploads/img/no-image.jpg'); ?>" alt="Resim Yok">
                            <?php endif; ?>
                        </div>
                        <div class="product__details__thumb">
                            <div class="pt__item active">
                                <img class="big_img" src="<?php echo
                                base_url('default/uploads/img/shop/' . $product->urun_resim); ?>" alt="<?php echo $product->urun_adi; ?>">
                            </div>
                            <div class="pt__item">
                                <img class="big_img" src="<?php echo
                                base_url('default/uploads/img/shop/' . $product->urun_resim); ?>" alt="<?php echo $product->urun_adi; ?>">
                            </div>
                            <div class="pt__item">
                                <img class="big_img" src="<?php echo
                                base_url('default/uploads/img/shop/' . $product->urun_resim); ?>" alt="<?php echo $product->urun_adi; ?>">
                            </div>
                            <div class="pt__item">
                                <img class="big_img" src="<?php echo
                                base_url('default/uploads/img/shop/' . $product->urun_resim); ?>" alt="<?php echo $product->urun_adi; ?>">
                            </div>
                            <div class="pt__item">
                                <img class="big_img" src="<?php echo
                                base_url('default/uploads/img/shop/' . $product->urun_resim); ?>" alt="<?php echo $product->urun_adi; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <?php if (isset($product)): ?>
                            <div class="product__label"><?php echo $product->urun_kategori; ?></div>
                            <h4><?php echo $product->urun_adi; ?></h4>
                            <h5><?php echo $product->urun_fiyat; ?>₺</h5>
                            <p><?php echo $product->urun_icerik; ?></p>
                            <ul>
                                <li>SKU: <span><?php echo $product->urun_kodu; ?></span></li>
                            </ul>
                            <form action="<?php echo base_url("sepete_ekle"); ?>" method="POST">
                                <div class="product__details__option">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                    <a href="#" class="primary-btn">SEPETE EKLE</a>
                                    <a href="#" class="heart__btn"><span class="icon_heart_alt"></span></a>
                                </div>
                            </form>
                        <?php else: ?>
                            <p>Ürün bilgileri yüklenemedi.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="product__details__tab">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Additional information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Previews(1)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <p><?php echo $product->urun_description; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <p><?php echo $product->urun_add_info; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <p><?php echo $product->urun_previews; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->







    <!--    YAPAMADIM :/-->
<!--    <section class="related-products spad">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-12 text-center">-->
<!--                    <div class="section-title">-->
<!--                        <h2>Related Products</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="related__products__slider owl-carousel">-->
<!--                    <div class="col-lg-3">-->
<!--                        <div class="product__item">-->
<!--                            <div class="product__item__pic set-bg" data-setbg="img/shop/product-1.jpg">-->
<!--                                <div class="product__label">-->
<!--                                    <span>Cupcake</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="product__item__text">-->
<!--                                <h6><a href="#">Dozen Cupcakes</a></h6>-->
<!--                                <div class="product__item__price">$32.00</div>-->
<!--                                <div class="cart_add">-->
<!--                                    <a href="#">Add to cart</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

    <section class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>İlgili Ürünler</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="related__products__slider owl-carousel">
                    <?php foreach ($products as $catpro) { ?>
                        <div class="col-lg-3">
                            <div class="product__item">
                                <a href="<?php echo base_url('products/'.$catpro->urun_sef); ?>">
                                    <div class="product__item__pic set-bg" data-setbg="<?php echo base_url('default/uploads/img/shop/'.$catpro->urun_resim); ?>">
                                        <div class="product__label">
                                            <span><?php echo $catpro->urun_kategori; ?></span>
                                        </div>
                                    </div>
                                </a>
                                <div class="product__item__text">
                                    <h6><a href="<?php echo base_url('products/'.$catpro->urun_sef); ?>"><?php echo $catpro->urun_adi; ?></a></h6>
                                    <div class="product__item__price"><?php echo $catpro->urun_fiyat; ?>₺</div>
                                    <div class="cart_add">
                                        <a href="#">Sepete Ekle</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>



</body>

<?php $this->load->view('default/inc/footer'); ?>