<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/frontend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/slick/slick.min.css'); ?>
<?php $cb->get_css('js/plugins/slick/slick-theme.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-gd-primary overflow-hidden">
    <div class="hero bg-pattern bg-black-op-25" style="background-image: url('<?php echo $cb->assets_folder; ?>/img/various/bg-fe-pattern.png');">
        <div class="hero-inner">
            <div class="content content-full text-center">
                <h1 class="display-3 font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInDown">Powerful UI framework</h1>
                <h2 class="font-w400 text-white-op mb-50 invisible" data-toggle="appear" data-class="animated fadeInDown">Build something incredible!</h2>
                <a class="btn btn-hero btn-noborder btn-rounded btn-success mr-5 mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp" href="https://goo.gl/po9Usv">
                    <i class="fa fa-shopping-bag mr-10"></i> Purchase
                </a>
                <a class="btn btn-hero btn-noborder btn-rounded btn-primary mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp" href="be_pages_dashboard.php">
                    <i class="fa fa-rocket mr-10"></i> Live Preview
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Full Features -->
<div class="bg-white">
    <div class="content content-full">
        <div class="row nice-copy py-30">
            <div class="col-sm-6 col-md-4 py-30">
                <div class="item item-circle item-2x mx-auto bg-gd-cherry mb-30">
                    <i class="si si-fire text-white"></i>
                </div>
                <h4 class="font-w400 text-black text-center mb-10">One Flexible Layout</h4>
                <p class="mb-0">Codebase’s layout was built from the ground up to be flexible, lightweight and easy to use. It will enable you to build backend and frontend pages that look and work great.</p>
            </div>
            <div class="col-sm-6 col-md-4 py-30">
                <div class="item item-circle item-2x mx-auto bg-gd-emerald mb-30">
                    <i class="si si-rocket text-white"></i>
                </div>
                <h4 class="font-w400 text-black text-center mb-10">Bootstrap 4</h4>
                <p class="mb-0">Bootstrap is a sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development. Codebase was built on top, extending it to a large degree.</p>
            </div>
            <div class="col-sm-6 col-md-4 py-30">
                <div class="item item-circle item-2x mx-auto bg-gd-dusk text-white mb-30">Sass</div>
                <h4 class="font-w400 text-black text-center mb-10">Built with Sass</h4>
                <p class="mb-0">Codebase CSS framework was built with Sass, following a completely modular approach which is super easy to follow, customize and extend.</p>
            </div>
            <div class="col-sm-6 col-md-4 py-30">
                <div class="item item-circle item-2x mx-auto bg-gd-aqua mb-30">
                    <i class="si si-screen-smartphone text-white"></i>
                </div>
                <h4 class="font-w400 text-black text-center mb-10">Fully Responsive</h4>
                <p class="mb-0">The User Interface will adjust to any screen size. It will look great on mobile devices and desktops at the same time. No need to worry about the UI, just stay focused on the development.</p>
            </div>
            <div class="col-sm-6 col-md-4 py-30">
                <div class="item item-circle item-2x mx-auto bg-gd-sea mb-30">
                    <i class="si si-speedometer text-white"></i>
                </div>
                <h4 class="font-w400 text-black text-center mb-10">Fast &amp; Lightweight</h4>
                <p class="mb-0">Codebase is not bloated with jQuery plugins and created to be as fast and lightweight as possible. Use on demand only the features you need for your project.</p>
            </div>
            <div class="col-sm-6 col-md-4 py-30">
                <div class="item item-circle item-2x mx-auto bg-gd-lake mb-30">
                    <i class="si si-chemistry text-white"></i>
                </div>
                <h4 class="font-w400 text-black text-center mb-10">Components</h4>
                <p class="mb-0">Codebase comes packed with so many unique components. Carefully picked and integrated to enhance and enrich your project with great functionality.</p>
            </div>
        </div>
    </div>
</div>
<!-- END Full Features -->

<!-- Image Promo Slider -->
<div class="bg-body-light">
    <div class="content content-full text-center">
        <div class="py-30 invisible" data-toggle="appear">
            <!-- Promo Slider (.js-slider class is initialized in Codebase() -> uiHelperSlick()) -->
            <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
            <div class="js-slider slick-nav-white" data-arrows="true" data-dots="true">
                <div>
                    <h3 class="font-w400 text-black mb-10">Clean Design</h3>
                    <h4 class="h5 font-w400 text-muted mb-30">For modern and easy to use web applications.</h4>
                    <img class="img-fluid mx-auto" src="<?php echo $cb->assets_folder; ?>/img/various/fe-cb-promo1.png" alt="Promo">
                </div>
                <div>
                    <h3 class="font-w400 text-black mb-10">Powerful Layout</h3>
                    <h4 class="h5 font-w400 text-muted mb-30">Easy to work with and highly customizable layout.</h4>
                    <img class="img-fluid mx-auto" src="<?php echo $cb->assets_folder; ?>/img/various/fe-cb-promo2.png" alt="Promo">
                </div>
                <div>
                    <h3 class="font-w400 text-black mb-10">Attention to Details</h3>
                    <h4 class="h5 font-w400 text-muted mb-30">Handcrafted custom page design.</h4>
                    <img class="img-fluid mx-auto" src="<?php echo $cb->assets_folder; ?>/img/various/fe-cb-promo3.png" alt="Promo">
                </div>
            </div>
            <!-- END Promo Slider -->
        </div>
    </div>
</div>
<!-- END Image Promo Slider -->

<!-- Quick Features -->
<div class="bg-white">
    <div class="content content-full">
        <div class="row no-gutters nice-copy py-30">
            <div class="col-6 col-md-4 py-30">
                <div class="item item-circle item-2x mx-auto bg-gd-elegance mb-20">
                    <i class="si si-vector text-white"></i>
                </div>
                <h4 class="font-w400 text-black text-uppercase text-center mb-0">Powerful Layout</h4>
            </div>
            <div class="col-6 col-md-4 py-30">
                <div class="item item-circle item-2x mx-auto bg-gd-sun mb-20">
                    <i class="si si-wallet text-white"></i>
                </div>
                <h4 class="font-w400 text-black text-uppercase text-center mb-0">Save time</h4>
            </div>
            <div class="col-6 col-md-4 py-30">
                <div class="item item-circle item-2x mx-auto bg-gd-default mb-20">
                    <i class="si si-magic-wand text-white"></i>
                </div>
                <h4 class="font-w400 text-black text-uppercase text-center mb-0">UI Components</h4>
            </div>
            <div class="col-6 col-md-4 py-30">
                <div class="item item-circle item-2x mx-auto bg-gd-leaf mb-20">
                    <i class="si si-support text-white"></i>
                </div>
                <h4 class="font-w400 text-black text-uppercase text-center mb-0">Support</h4>
            </div>
            <div class="col-6 col-md-4 py-30">
                <div class="item item-circle item-2x mx-auto bg-gd-dusk mb-20">
                    <i class="si si-present text-white"></i>
                </div>
                <h4 class="font-w400 text-black text-uppercase text-center mb-0">Free Updates</h4>
            </div>
            <div class="col-6 col-md-4 py-30">
                <div class="item item-circle item-2x mx-auto bg-gd-corporate mb-20">
                    <i class="si si-book-open text-white"></i>
                </div>
                <h4 class="font-w400 text-black text-uppercase text-center mb-0">Documentation</h4>
            </div>
        </div>
    </div>
</div>
<!-- END Quick Features -->

<!-- Quick Stats -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/img/photos/photo26@2x.jpg');">
    <div class="bg-black-op-75">
        <div class="content content-full">
            <!-- CountTo ([data-toggle="countTo"] is initialized in Codebase() -> uiHelperCoreAppearCountTo()) -->
            <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
            <div class="row text-center py-30">
                <div class="col-sm-6 col-md-3 py-30">
                    <div class="mb-20">
                        <i class="si si-users fa-3x text-primary"></i>
                    </div>
                    <div class="font-size-h1 font-w700 text-white mb-5" data-toggle="countTo" data-to="10000" data-after="+">0</div>
                    <div class="font-w600 text-muted text-uppercase">Customers</div>
                </div>
                <div class="col-sm-6 col-md-3 py-30">
                    <div class="mb-20">
                        <i class="si si-briefcase fa-3x text-info"></i>
                    </div>
                    <div class="font-size-h1 font-w700 text-white mb-5" data-toggle="countTo" data-to="10" data-after="+">0</div>
                    <div class="font-w600 text-muted text-uppercase">Projects</div>
                </div>
                <div class="col-sm-6 col-md-3 py-30">
                    <div class="mb-20">
                        <i class="si si-clock fa-3x text-success"></i>
                    </div>
                    <div class="font-size-h1 font-w700 text-white mb-5" data-toggle="countTo" data-to="17600" data-after="+">0</div>
                    <div class="font-w600 text-muted text-uppercase">Hours</div>
                </div>
                <div class="col-sm-6 col-md-3 py-30">
                    <div class="mb-20">
                        <i class="si si-star fa-3x text-warning"></i>
                    </div>
                    <div class="font-size-h1 font-w700 text-white mb-5" data-toggle="countTo" data-to="850" data-after="+">0</div>
                    <div class="font-w600 text-muted text-uppercase">5 Star Ratings</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Quick Stats -->

<!-- Call to Action -->
<div class="bg-body-light">
    <div class="content content-full text-center">
        <div class="py-30">
            <h3 class="font-w700 mb-10">
                Crafted with <i class="fa fa-heart text-danger"></i> by <a class="link-effect" href="http://goo.gl/vNS3I">pixelcave</a>
            </h3>
            <h4 class="font-w400 text-muted mb-30">Passionate web design and development since 2009.</h4>
            <a class="btn btn-hero btn-rounded btn-alt-danger mb-5" href="fe_features.php">
                <i class="fa fa-cogs mr-5"></i> More Features
            </a>
            <a class="btn btn-hero btn-rounded btn-alt-primary mb-5" href="fe_pricing.php">Get Started today</a>
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