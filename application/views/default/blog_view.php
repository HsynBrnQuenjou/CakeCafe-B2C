<?php $this->load->view('default/inc/header'); ?>

<body>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Blog</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="<?php echo base_url(); ?>">Anasayfa</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <?php if($blogs){ ?>
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

<!--                    <div class="blog__item">-->
<!--                        --><?php //foreach($blogs as $blog){ ?>
<!--                        <div class="blog__item__pic set-bg" data-setbg="--><?php //echo base_url('default/uploads/img/blog/'.$blog->blogresim); ?><!--" alt="--><?php //echo $blog->blogbaslik; ?><!--">-->
<!--                            <div class="blog__pic__inner">-->
<!--                                <div class="label">Recipes</div>-->
<!--                                <ul>-->
<!--                                    <li>By <span>--><?php //echo $blog->blogekleyen; ?><!--</span></li>-->
<!--                                    <li>--><?php //echo $blog->blogtarih; ?><!--</li>-->
<!--                                    <li>--><?php //echo $blog->bloggoruntulenme; ?><!-- Views</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="blog__item__text">-->
<!--                            <h2>--><?php //echo $blog->blogbaslik; ?><!--</h2>-->
<!--                            <p>--><?php //echo $blog->blogkisa; ?><!--</p>-->
<!--                            <a href="#">READ MORE</a>-->
<!--                        </div>-->
<!--                        --><?php //} ?>
<!--                    </div>-->

                    <?php foreach ($blogs as $blog){ ?>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="<?php echo base_url('default/uploads/img/blog/'.$blog->blogresim)?>">
                            <div class="blog__pic__inner">
                                <div class="label">Tarifler</div>
                                <ul>
                                    <li>By <span><?php echo $blog->blogekleyen ?></span></li>
                                    <li><?php echo $blog->blogtarih ?></li>
                                    <li><?php echo $blog->bloggoruntulenme ?> Görüntülenme</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__item__text">
                            <h2><?php echo $blog->blogbaslik ?></h2>
                            <p><?php echo $blog->blogkisa ?></p>
                            <a href="<?php echo base_url('/blog/blog_details/'.$blog->blogsef); ?>">DEVAMINI OKU</a>
                        </div>
                    </div>
                <?php } ?>

                    <div class="shop__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><span class="arrow_carrot-right"></span></a>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Enter keyword">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h5>Bizi Takip Edin</h5>
                            <div class="blog__sidebar__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>

                        <div class="blog__sidebar__item">
                            <h5>Popüler Bloglarımız</h5>

                            <div class="blog__sidebar__recent">
                                <?php foreach ($popularblogs as $popblogs){ ?>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img width="90" height="90" src="<?php echo base_url('default/uploads/img/blog/'.$popblogs->blogresim)?>" alt="<?php echo $popblogs->blogbaslik?>">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h4><?php echo $popblogs->blogbaslik ?></h4>
                                        <span><?php echo $popblogs->blogtarih?></span>
                                        <span> | </span>
                                        <span><?php echo $popblogs->bloggoruntulenme?> Görüntülenme</span>
                                    </div>
                                </a>
                                <?php } ?>

                            </div>
                        </div>

                        <div class="blog__sidebar__item">
                            <h5>Kategoriler</h5>
                            <div class="blog__sidebar__item__categories">
                                <ul>
                                    <li><a href="#">Repice <span>36</span></a></li>
                                    <li><a href="#">Guides <span>18</span></a></li>
                                    <li><a href="#">News <span>09</span></a></li>
                                    <li><a href="#">Videos <span>12</span></a></li>
                                    <li><a href="#">Trending <span>27</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h5>Haber Bülteni</h5>
                            <p>Bültenimize abone olun ve en son güncellemelerimizi doğrudan e-posta kutunuza alın.</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <label for="agg">
                                    Şartlar ve koşulları kabul ediyorum
                                    <input type="checkbox" id="agg">
                                    <span class="checkmark"></span>
                                </label>
                                <button type="submit" class="site-btn">Abone Olun</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <!-- Blog Section End -->



<?php $this->load->view('default/inc/footer'); ?>

