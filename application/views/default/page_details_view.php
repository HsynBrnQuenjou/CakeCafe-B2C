<?php $this->load->view('default/inc/header'); ?>

<body>
    "<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Page Details</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="<?php echo base_url() ?>">Home</a>
                        <span><?php echo $page->sayfaadi; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->"

    <!-- Blog Hero Begin -->
    <div class="blog-hero set-bg" data-setbg="default/uploads/img/blog/details/blog-hero.jpg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7">
                    <div class="blog__hero__text">
                        <div class="label">Pages</div>
                        <h2><?php echo $page->sayfaadi; ?></h2>
                        <ul>
                            <li>By <span>admin</span></li>
                            <li>13 Nov 2020</li>
                            <li>112 Views</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9">
                    <div class="blog__details__content">
                        <div class="blog__details__text">
                            <p>The cast brass and cast stainless steel burners have the smallest burrs — by far. This
                                will mean less chaos in the gas flow, fewer trapped particulate matter in the burner and
                            a cleaner burning grill. The following comparison shows how the ports are formed.</p>
                            <p>Why is port formation important? Several reasons. If the hole is punched into a sheet
                                metal burner, it leaves a large tab inside the burner that will caus e more chaos while
                                burning. It is more apt to hold trapped food particles and grease, and is therefore more
                            likely to burn through. (Note the Alfresco burner photo below.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<?php $this->load->view('default/inc/footer'); ?>