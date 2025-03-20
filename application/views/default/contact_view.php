<?php $this->load->view('default/inc/header'); ?>

<body>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>İletişim</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="index.php">Anasayfa</a>
                        <span>İletişim</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="map">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-7">
                            <div class="map__inner">  <!-- Google maps bilgisi -->
                                <h6>COlorado</h6> <!-- BURASI İÇİN ŞÖYLE BİR ŞEY DÜŞÜNDÜM. ADMİNPANELDEN MERKEZKAFE DİYE BİR MESSAGEBOX TARZI BİR ŞEY OLUŞTURALIM  -->
                                <ul>  <!-- SONRA ORADAN ADRES1, ADRES2,.. GİBİSİNDEN BİRİNİ SEÇELİM VE ONUN BİLGİLERİ GELSİN-->
                                    <li>1000 Lakepoint Dr, Frisco, CO 80443, USA</li> <!-- MESEKA $setting->merkezadres (buradaki merkezadres mesela adres1 olsun ve adres1'in bilgileri oto çekilsin -->
                                    <li>Sweetcake@support.com</li>
                                    <li>+1 800-786-1000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map__iframe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10784.188505644011!2d19.053119335158936!3d47.48899529453826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1543907528304" height="300" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="contact__address">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact__address__item">
                            <h6><?php echo $setting->adresbaslik1; ?></h6>
                            <ul>
                                <li>
                                    <span class="icon_pin_alt"></span>
                                    <p><?php echo $setting->adresdetay1; ?></p>
                                </li>
                                <li><span class="icon_headphones"></span>
                                    <p><?php echo $setting->tel1; ?></p>
                                </li>
                                <li><span class="icon_mail_alt"></span>
                                    <p><?php echo $setting->mail; ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact__address__item">
                            <h6><?php echo $setting->adresbaslik2; ?></h6>
                            <ul>
                                <li>
                                    <span class="icon_pin_alt"></span>
                                    <p><?php echo $setting->adresdetay2; ?></p>
                                </li>
                                <li><span class="icon_headphones"></span>
                                    <p><?php echo $setting->tel2; ?></p>
                                </li>
                                <li><span class="icon_mail_alt"></span>
                                    <p><?php echo $setting->mail; ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact__address__item">
                            <h6><?php echo $setting->adresbaslik3; ?></h6>
                            <ul>
                                <li>
                                    <span class="icon_pin_alt"></span>
                                    <p><?php echo $setting->adresdetay3; ?></p>
                                </li>
                                <li><span class="icon_headphones"></span>
                                    <p><?php echo $setting->tel3; ?></p>
                                </li>
                                <li><span class="icon_mail_alt"></span>
                                    <p><?php echo $setting->mail; ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact__text">
                        <h3>Contact With us</h3>
                        <ul>
                            <li>Representatives or Advisors are available:</li>
                            <li>Mon-Fri: 5:00am to 9:00pm</li>
                            <li>Sat-Sun: 6:00am to 9:00pm</li>
                        </ul>
                        <img src="default/uploads/img/cake-piece.png" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact__form">
                        <form id="contact-form" onsubmit="return false;">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="ADINIZ-SOYADINIZ">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email" placeholder="E-MAIL">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="subject" placeholder="KONU">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="MESAJINIZ..."></textarea> <!-- onclick="sendmessage();" BIR TURLU OLMADI VIDEO 10-11-12 -->
                                    <button type="submit" name="message" class="site-btn">MESAJ GÖNDERİN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

</body>

<?php $this->load->view('default/inc/footer'); ?>