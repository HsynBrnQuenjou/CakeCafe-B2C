<?php $this->load->view('default/inc/header'); ?>

    <body>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Ürünler</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="index.php">Anasayfa</a>
                        <span>Ürünler</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="shop__option">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="shop__option__search">
                            <form action="#">
                                <!--                                <select>-->
                                <!--                                    <option value="">Categories</option>-->
                                <!--                                    <option value="">Red Velvet</option>-->
                                <!--                                    <option value="">Cup Cake</option>-->
                                <!--                                    <option value="">Biscuit</option>-->
                                <!--                                </select>-->
                                <?php if($categories){ ?>
                                    <select name="search_term2" onchange="location = this.value;">
                                        <option value="">Categories</option>
                                        <?php foreach($categories as $cat){ ?>
                                            <option value="<?php echo base_url('category/'.$cat->katsef); ?>">
                                                <?php echo $cat->katadi; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                <?php } ?>

                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="shop__option__right">
                            <select>
                                <option value="">Default sorting</option>
                                <option value="">A to Z</option>
                                <option value="">1 - 8</option>
                                <option value="">Name</option>
                            </select>
                            <a href="#"><i class="fa fa-list"></i></a>
                            <a href="#"><i class="fa fa-reorder"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--            <div class="container">-->
            <!--                --><?php //if ($products  && !empty($products)) { ?>
            <!--                <div class="row">-->
            <!--                    --><?php //foreach ($products as $pro){ ?>
            <!--                    <div class="col-lg-3 col-md-6 col-sm-6">-->
            <!--                        <div class="product__item">-->
            <!--                            <a href="--><?php //echo base_url('pages/product_details'); ?><!--">-->
            <!--                                <div  class="product__item__pic set-bg" data-setbg="--><?php //echo base_url('default/uploads/img/shop/'.$pro->urun_resim); ?><!--" alt="--><?php //echo $pro->urun_adi; ?><!--">-->
            <!--                                    <div class="product__label">-->
            <!--                                        <span>--><?php //echo $pro->urun_kategori; ?><!--</span>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                            </a>-->
            <!--                            <div class="product__item__text">-->
            <!--                                <h6><a href="--><?php //echo base_url('pages/product_details/'.$pro->urun_sef); ?><!--">--><?php //echo $pro->urun_adi; ?><!--</a></h6>-->
            <!--                                <div class="product__item__price">--><?php //echo $pro->urun_fiyat ?><!--₺</div>-->
            <!--                                <div class="cart_add">-->
            <!--                                    <a href="#">Sepete Ekle</a>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    --><?php //} ?>
            <!--                    </div>-->
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
            <!--                </div>-->
            <!--            </div>-->
            <div class="container">
                <?php if ($products && !empty($products)) { ?>
                    <div class="row">
                        <?php foreach ($products as $pro) { ?>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <a href="<?php echo base_url('products/'.$pro->urun_sef); ?>">
                                        <div class="product__item__pic set-bg" data-setbg="<?php echo base_url('default/uploads/img/shop/'.$pro->urun_resim); ?>">
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


            <div class="shop__last__option">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="shop__pagination">
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#"><span class="arrow_carrot-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="shop__last__text">
                            <p>Showing 1-9 of 10 results</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    </body>

<?php $this->load->view('default/inc/footer'); ?>