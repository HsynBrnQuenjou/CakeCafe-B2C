<!-- Footer Section Begin -->
<footer class="footer set-bg" data-setbg="<?php echo base_url('default/uploads/img/'.$setting->footersabitresim); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h6>ÇALIŞMA SAATLERİ</h6>
                    <ul>
                        <li>Pazartesi - Cuma: 08:00 – 20:30</li>
                        <li>Cumartesi: 10:00 – 16:30</li>
                        <li>Pazar: 10:00 – 16:30</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="<?php echo base_url()?>"><img src="<?php echo base_url('default/uploads/img/'.$setting->footerlogo)?>" alt="<?php echo $setting->footerlogo?>"></a>
                    </div>
                    <p>Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore dolore magna aliqua.</p>
                    <div class="footer__social">
<!--                        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>-->
<!--                        <a href="https://www.x.com/"><i class="fa fa-twitter"></i></a>-->
<!--                        <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>-->
<!--                        <a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>-->

                        <?php if($social) {
                            foreach ($social as $soc){
                                ?>
                                <a target="_blank" href="<?php echo $soc->soslink; ?>"><?php echo $soc->sosikon; ?></a>
                                <?php
                            }
                        }

                        ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__newslatter">
                    <h6>Bültene Kayıt Olun</h6>
                    <p>En son güncellemeleri ve teklifleri alın.</p>
                    <form action="#">
                        <input type="text" placeholder="Email">
                        <button type="submit"><i class="fa fa-send-o"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="copyright__text text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://github.com/HsynBrnQuenjou" target="_blank">HsynBrn_Quenjou</a> -->

                        <?php echo $setting->site_footer; ?>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="copyright__widget">
                        <?php if($pages) { ?>
                        <ul>

                            <?php foreach ($pages as $page){ ?>
                                <li><a href="<?php echo base_url('page/'.$page->sayfasef); ?>"><?php echo $page->sayfaadi; ?></a></li>
                            <?php } ?>

<!--                            <li><a href="#">Privacy Policy</a></li>-->
<!--                            <li><a href="#">Terms & Conditions</a></li>-->
<!--                            <li><a href="#">Site Map</a></li>-->
                        </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="<?php echo base_url();?>default/assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url();?>default/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>default/assets/js/jquery.nice-select.min.js"></script>
<script src="<?php echo base_url();?>default/assets/js/jquery.barfiller.js"></script>
<script src="<?php echo base_url();?>default/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url();?>default/assets/js/jquery.slicknav.js"></script>
<script src="<?php echo base_url();?>default/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>default/assets/js/jquery.nicescroll.min.js"></script>
<script src="<?php echo base_url();?>default/assets/js/main.js"></script>
<script src="<?php echo base_url();?>/default/assets/js/custom.js?v=<?php echo time();?>"></script>
<script src="<?php echo base_url();?>/default/assets/sweetalert/sweetalert2.min.js"></script>
</body>

</html>
