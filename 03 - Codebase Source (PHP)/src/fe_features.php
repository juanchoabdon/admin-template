<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/frontend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/slick/slick.min.css'); ?>
<?php $cb->get_css('js/plugins/slick/slick-theme.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<!-- jQuery Vide for video backgrounds, for more examples you can check out https://github.com/VodkaBears/Vide -->
<div class="bg-video" data-vide-bg="<?php echo $cb->assets_folder; ?>/img/videos/city_night" data-vide-options="posterType: jpg">
    <div class="hero bg-black-op">
        <div class="hero-inner">
            <div class="content content-full text-center">
                <h1 class="display-3 font-w700 text-white mb-10">Features</h1>
                <h2 class="font-w400 text-white-op">Built from the ground up.</h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Full Features -->
<div class="bg-white">
    <div class="content">
        <div class="row nice-copy py-30">
            <div class="col-sm-6 py-30">
                <div class="row">
                    <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end">
                        <div class="item item-circle item-2x bg-danger-light mb-30">
                            <i class="si si-fire text-danger"></i>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h4 class="font-size-xl font-w700 text-uppercase text-center text-lg-left mb-5">One Flexible Layout</h4>
                        <p class="mb-0">Codebase’s layout was built from the ground up to be flexible, lightweight and easy to use. It will enable you to build backend and frontend pages that look and work great.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-30">
                <div class="row">
                    <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end">
                        <div class="item item-circle item-2x bg-warning-light mb-30">
                            <i class="si si-rocket text-warning"></i>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h4 class="font-size-xl font-w700 text-uppercase text-center text-lg-left mb-5">Bootstrap 4</h4>
                        <p class="mb-0">Bootstrap is a sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development. Codebase was built on top, extending it to a large degree.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-30">
                <div class="row">
                    <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end">
                        <div class="item item-circle item-2x bg-success-light text-success font-w400 mb-30">Sass</div>
                    </div>
                    <div class="col-lg-8">
                        <h4 class="font-size-xl font-w700 text-uppercase text-center text-lg-left mb-5">Built with Sass</h4>
                        <p class="mb-0">Codebase CSS framework was built with Sass, following a completely modular approach which is super easy to follow, customize and extend.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-30">
                <div class="row">
                    <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end">
                        <div class="item item-circle item-2x bg-success-light mb-30">
                            <i class="si si-speedometer text-success"></i>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h4 class="font-size-xl font-w700 text-uppercase text-center text-lg-left mb-5">Fast &amp; Lightweight</h4>
                        <p class="mb-0">Codebase is not bloated with jQuery plugins and created to be as fast and lightweight as possible. Use on demand only the features you need for your project.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-30">
                <div class="row">
                    <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end">
                        <div class="item item-circle item-2x bg-elegance-lighter mb-30">
                            <i class="fa fa-tasks text-elegance"></i>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h4 class="font-size-xl font-w700 text-uppercase text-center text-lg-left mb-5">Gulp Tasks</h4>
                        <p class="mb-0">Time-saving tasks that can live compile your Sass as you work and also build for you a custom, minimized and production ready Codebase framework.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-30">
                <div class="row">
                    <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end">
                        <div class="item item-circle item-2x bg-flat-lighter mb-30">
                            <i class="si si-star text-flat"></i>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h4 class="font-size-xl font-w700 text-uppercase text-center text-lg-left mb-5">Get Started Version</h4>
                        <p class="mb-0">A simple version with boilerplate pages is also included in the package. It will help you rocket start your project.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Full Features -->

<!-- Testimonials -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/img/photos/photo16@2x.jpg');">
    <div class="bg-primary-dark-op">
        <div class="content content-full text-center">
            <div class="py-30 invisible" data-toggle="appear">
                <!-- Testimonials Slider (.js-slider class is initialized in Codebase() -> uiHelperSlick()) -->
                <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
                <div class="js-slider slick-nav-black slick-dotted-white" data-arrows="true" data-dots="true">
                    <div>
                        <div class="py-10">
                            <?php $cb->get_avatar(10, '', 96, true); ?>
                        </div>
                        <div class="row justify-content-center py-10">
                            <div class="col-md-8">
                                <div class="mb-10">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                                <h3 class="font-w700 text-white mb-10">Professional work!</h3>
                                <p class="font-size-lg text-body-bg-dark">Highly talended people who will help you bring your ideas to life.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="py-10">
                            <?php $cb->get_avatar(3, '', 96, true); ?>
                        </div>
                        <div class="row justify-content-center py-10">
                            <div class="col-md-8">
                                <div class="mb-10">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                                <h3 class="font-w700 text-white mb-10">Our ideas came to life!</h3>
                                <p class="font-size-lg text-body-bg-dark">The final project exceeded our expectations! Thank you so much!</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="py-10">
                            <?php $cb->get_avatar(14, '', 96, true); ?>
                        </div>
                        <div class="row justify-content-center py-10">
                            <div class="col-md-8">
                                <div class="mb-10">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                                <h3 class="font-w700 text-white mb-10">Don’t hesitate, this is the team!</h3>
                                <p class="font-size-lg text-body-bg-dark">Stop looking, this is the team that will help you succeed.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Testimonials Slider -->
            </div>
        </div>
    </div>
</div>
<!-- END Testimonials -->

<!-- Quick Features -->
<div class="bg-white">
    <div class="content content-full">
        <div class="row text-center py-30">
            <div class="col-sm-6 col-md-4 py-30">
                <div class="mb-20 invisible" data-toggle="appear" data-class="animated zoomIn">
                    <img src="<?php echo $cb->assets_folder; ?>/img/various/promo-icon-book.png" srcset="<?php echo $cb->assets_folder; ?>/img/various/promo-icon-book@2x.png 2x" alt="">
                </div>
                <h4 class="font-w400 text-black text-uppercase mb-0 invisible" data-toggle="appear" data-class="animated fadeInUp">Documentation</h4>
            </div>
            <div class="col-sm-6 col-md-4 py-30">
                <div class="mb-20 invisible" data-toggle="appear" data-class="animated zoomIn">
                    <img src="<?php echo $cb->assets_folder; ?>/img/various/promo-icon-console.png" srcset="<?php echo $cb->assets_folder; ?>/img/various/promo-icon-console@2x.png 2x" alt="">
                </div>
                <h4 class="font-w400 text-black text-uppercase mb-0 invisible" data-toggle="appear" data-class="animated fadeInUp">Clean Code</h4>
            </div>
            <div class="col-sm-6 col-md-4 py-30">
                <div class="mb-20 invisible" data-toggle="appear" data-class="animated zoomIn">
                    <img src="<?php echo $cb->assets_folder; ?>/img/various/promo-icon-diamond.png" srcset="<?php echo $cb->assets_folder; ?>/img/various/promo-icon-diamond@2x.png 2x" alt="">
                </div>
                <h4 class="font-w400 text-black text-uppercase mb-0 invisible" data-toggle="appear" data-class="animated fadeInUp">Powerful Layout</h4>
            </div>
            <div class="col-sm-6 col-md-4 py-30">
                <div class="mb-20 invisible" data-toggle="appear" data-class="animated zoomIn">
                    <img src="<?php echo $cb->assets_folder; ?>/img/various/promo-icon-hourglass.png" srcset="<?php echo $cb->assets_folder; ?>/img/various/promo-icon-hourglass@2x.png 2x" alt="">
                </div>
                <h4 class="font-w400 text-black text-uppercase mb-0 invisible" data-toggle="appear" data-class="animated fadeInUp">Save Time</h4>
            </div>
            <div class="col-sm-6 col-md-4 py-30">
                <div class="mb-20 invisible" data-toggle="appear" data-class="animated zoomIn">
                    <img src="<?php echo $cb->assets_folder; ?>/img/various/promo-icon-lamp.png" srcset="<?php echo $cb->assets_folder; ?>/img/various/promo-icon-lamp@2x.png 2x" alt="">
                </div>
                <h4 class="font-w400 text-black text-uppercase mb-0 invisible" data-toggle="appear" data-class="animated fadeInUp">Ideas</h4>
            </div>
            <div class="col-sm-6 col-md-4 py-30">
                <div class="mb-20 invisible" data-toggle="appear" data-class="animated zoomIn">
                    <img src="<?php echo $cb->assets_folder; ?>/img/various/promo-icon-lifebuoy.png" srcset="<?php echo $cb->assets_folder; ?>/img/various/promo-icon-lifebuoy@2x.png 2x" alt="">
                </div>
                <h4 class="font-w400 text-black text-uppercase mb-0 invisible" data-toggle="appear" data-class="animated fadeInUp">Support</h4>
            </div>
            <div class="col-sm-6 col-md-4 py-30">
                <div class="mb-20 invisible" data-toggle="appear" data-class="animated zoomIn">
                    <img src="<?php echo $cb->assets_folder; ?>/img/various/promo-icon-satelite.png" srcset="<?php echo $cb->assets_folder; ?>/img/various/promo-icon-satelite@2x.png 2x" alt="">
                </div>
                <h4 class="font-w400 text-black text-uppercase mb-0 invisible" data-toggle="appear" data-class="animated fadeInUp">Components</h4>
            </div>
            <div class="col-sm-6 col-md-4 py-30">
                <div class="mb-20 invisible" data-toggle="appear" data-class="animated zoomIn">
                    <img src="<?php echo $cb->assets_folder; ?>/img/various/promo-icon-shield.png" srcset="<?php echo $cb->assets_folder; ?>/img/various/promo-icon-shield@2x.png 2x" alt="">
                </div>
                <h4 class="font-w400 text-black text-uppercase mb-0 invisible" data-toggle="appear" data-class="animated fadeInUp">Feature Rich</h4>
            </div>
            <div class="col-sm-12 col-md-4 py-30">
                <div class="mb-20 invisible" data-toggle="appear" data-class="animated zoomIn">
                    <img src="<?php echo $cb->assets_folder; ?>/img/various/promo-icon-workplace.png" srcset="<?php echo $cb->assets_folder; ?>/img/various/promo-icon-workplace@2x.png 2x" alt="">
                </div>
                <h4 class="font-w400 text-black text-uppercase mb-0 invisible" data-toggle="appear" data-class="animated fadeInUp">Work Smarter</h4>
            </div>
        </div>
    </div>
</div>
<!-- END Quick Features -->

<!-- Quick Stats -->
<div class="bg-primary-dark bg-pattern" style="background-image: url('<?php echo $cb->assets_folder; ?>/img/various/bg-fe-pattern.png');">
    <div class="content content-full">
        <!-- CountTo ([data-toggle="countTo"] is initialized in Codebase() -> uiHelperCoreAppearCountTo()) -->
        <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
        <div class="row text-center py-30">
            <div class="col-sm-6 col-md-3 py-30">
                <div class="mb-20">
                    <i class="si si-users fa-3x text-primary-lighter"></i>
                </div>
                <div class="font-size-h1 font-w700 text-white mb-5" data-toggle="countTo" data-to="10000" data-after="+">0</div>
                <div class="font-w600 text-white-op text-uppercase">Customers</div>
            </div>
            <div class="col-sm-6 col-md-3 py-30">
                <div class="mb-20">
                    <i class="si si-briefcase fa-3x text-primary-lighter"></i>
                </div>
                <div class="font-size-h1 font-w700 text-white mb-5" data-toggle="countTo" data-to="10" data-after="+">0</div>
                <div class="font-w600 text-white-op text-uppercase">Projects</div>
            </div>
            <div class="col-sm-6 col-md-3 py-30">
                <div class="mb-20">
                    <i class="si si-clock fa-3x text-primary-lighter"></i>
                </div>
                <div class="font-size-h1 font-w700 text-white mb-5" data-toggle="countTo" data-to="17600" data-after="+">0</div>
                <div class="font-w600 text-white-op text-uppercase">Hours</div>
            </div>
            <div class="col-sm-6 col-md-3 py-30">
                <div class="mb-20">
                    <i class="si si-star fa-3x text-primary-lighter"></i>
                </div>
                <div class="font-size-h1 font-w700 text-white mb-5" data-toggle="countTo" data-to="850" data-after="+">0</div>
                <div class="font-w600 text-white-op text-uppercase">5 Star Ratings</div>
            </div>
        </div>
    </div>
</div>
<!-- END Quick Stats -->

<!-- Call to Action -->
<div class="bg-body-light">
    <div class="content content-full text-center">
        <div class="py-30">
            <h3 class="font-w700 mb-10">Awesome Features</h3>
            <h4 class="font-w400 text-muted mb-30">Emotional Design &amp; Inspiring Projects</h4>
            <a class="btn btn-hero btn-rounded btn-alt-primary" href="fe_pricing.php">Get Started today</a>
        </div>
    </div>
</div>
<!-- END Call to Action -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page Plugins -->
<?php $cb->get_js('js/plugins/jquery-vide/jquery.vide.min.js'); ?>
<?php $cb->get_js('js/plugins/slick/slick.min.js'); ?>

<!-- Page JS Code -->
<script>
    jQuery(function(){
        // Init page helpers (Slick Slider plugin)
        Codebase.helpers('slick');
    });
</script>

<?php require 'inc/_global/views/footer_end.php'; ?>