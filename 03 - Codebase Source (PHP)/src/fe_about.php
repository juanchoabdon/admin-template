<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/frontend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/slick/slick.min.css'); ?>
<?php $cb->get_css('js/plugins/slick/slick-theme.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-gd-primary">
    <div class="bg-pattern bg-black-op-25" style="background-image: url('<?php echo $cb->assets_folder; ?>/img/various/bg-fe-pattern.png');">
        <div class="content content-top text-center">
            <div class="py-50">
                <h1 class="font-w700 text-white mb-10">About Us</h1>
                <h2 class="h4 font-w400 text-white-op">Who are we and what are we doing.</h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Info -->
<div class="bg-white">
    <div class="content content-full">
        <div class="row nice-copy py-30">
            <div class="col-md-4 py-30">
                <h3 class="h4 font-w700 text-uppercase pb-10 border-b border-3x">Who We <span class="text-primary">Are</span>.</h3>
                <p class="mb-0">Posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos.</p>
            </div>
            <div class="col-md-4 py-30">
                <h3 class="h4 font-w700 text-uppercase pb-10 border-b border-3x">What We <span class="text-primary">Do</span>.</h3>
                <p class="mb-0">Posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos.</p>
            </div>
            <div class="col-md-4 py-30">
                <h3 class="h4 font-w700 text-uppercase pb-10 border-b border-3x">Why Choose <span class="text-primary">Us</span>.</h3>
                <p class="mb-0">Posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos.</p>
            </div>
            <div class="col-md-12 py-30">
                <h3 class="h4 font-w700 text-uppercase text-center pb-10 border-b border-3x mb-0">Quick <span class="text-primary">Statistics</span>.</h3>

                <!-- CountTo ([data-toggle="countTo"] is initialized in Codebase() -> uiHelperCoreAppearCountTo()) -->
                <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
                <div class="row text-center">
                    <div class="col-sm-6 col-md-3 py-30">
                        <div class="mb-20">
                            <i class="si si-briefcase fa-3x text-primary"></i>
                        </div>
                        <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="9600" data-after="+">0</div>
                        <div class="font-w600 text-muted text-uppercase">Projects</div>
                    </div>
                    <div class="col-sm-6 col-md-3 py-30">
                        <div class="mb-20">
                            <i class="si si-users fa-3x text-primary"></i>
                        </div>
                        <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="760" data-after="+">0</div>
                        <div class="font-w600 text-muted text-uppercase">Clients</div>
                    </div>
                    <div class="col-sm-6 col-md-3 py-30">
                        <div class="mb-20">
                            <i class="si si-clock fa-3x text-primary"></i>
                        </div>
                        <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="88600" data-after="+">0</div>
                        <div class="font-w600 text-muted text-uppercase">Hours</div>
                    </div>
                    <div class="col-sm-6 col-md-3 py-30">
                        <div class="mb-20">
                            <i class="si si-badge fa-3x text-primary"></i>
                        </div>
                        <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="60" data-after="+">0</div>
                        <div class="font-w600 text-muted text-uppercase">Awards</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Info -->

<!-- Testimonials -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/img/photos/photo32@2x.jpg');">
    <div class="bg-primary-dark-op">
        <div class="content content-full text-center">
            <div class="py-30 invisible" data-toggle="appear">
                <!-- Testimonials Slider (.js-slider class is initialized in Codebase() -> uiHelperSlick()) -->
                <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
                <div class="js-slider slick-nav-black slick-dotted-white" data-arrows="true" data-dots="true">
                    <div>
                        <div class="py-10">
                            <?php $cb->get_avatar(11, '', 96, true); ?>
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
                            <?php $cb->get_avatar(2, '', 96, true); ?>
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
                            <?php $cb->get_avatar(13, '', 96, true); ?>
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

<!-- Call to Action -->
<div class="bg-body-light">
    <div class="content content-full text-center">
        <div class="py-30">
            <h3 class="font-w700 mb-10">We would <span class="text-danger text-uppercase">love</span> to work together!</h3>
            <h4 class="font-w400 text-muted mb-30">Feel free to contact us. We will help you bring your ideas to life.</h4>
            <a class="btn btn-hero btn-rounded btn-alt-primary" href="fe_contact.php">
                <i class="fa fa-envelope-o mr-5"></i> Get In Touch
            </a>
        </div>
    </div>
</div>
<!-- END Call to Action -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page Plugins -->
<?php $cb->get_js('js/plugins/slick/slick.min.js'); ?>

<!-- Page JS Code -->
<script>
    jQuery(function(){
        // Init page helpers (Slick Slider plugin)
        Codebase.helpers('slick');
    });
</script>

<?php require 'inc/_global/views/footer_end.php'; ?>