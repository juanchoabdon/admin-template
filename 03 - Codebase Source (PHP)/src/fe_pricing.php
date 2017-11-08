<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/frontend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-gd-primary">
    <div class="bg-pattern bg-black-op-25" style="background-image: url('<?php echo $cb->assets_folder; ?>/img/various/bg-fe-pattern.png');">
        <div class="content content-top text-center">
            <div class="py-50">
                <h1 class="font-w700 text-white mb-10">Pricing</h1>
                <h2 class="h4 font-w400 text-white-op">The best plans to better suit your needs.</h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Pricing Tables -->
<div class="bg-white">
    <div class="content">
        <div class="row py-30">
            <div class="col-md-6 col-xl-3">
                <!-- Developer Plan -->
                <a class="block block-link-pop block-rounded block-bordered text-center" href="javascript:void(0)">
                    <div class="block-header">
                        <h3 class="block-title">Developer</h3>
                    </div>
                    <div class="block-content bg-body-light">
                        <div class="h1 font-w700 mb-10">$19</div>
                        <div class="h5 text-muted">per month</div>
                    </div>
                    <div class="block-content">
                        <p><strong>2</strong> Projects</p>
                        <p><strong>10GB</strong> Storage</p>
                        <p><strong>15</strong> Clients</p>
                        <p><strong>Email</strong> Support</p>
                    </div>
                    <div class="block-content block-content-full">
                        <span class="btn btn-hero btn-sm btn-rounded btn-noborder btn-alt-success">Sign Up</span>
                    </div>
                </a>
                <!-- END Developer Plan -->
            </div>
            <div class="col-md-6 col-xl-3">
                <!-- Startup Plan -->
                <a class="block block-link-pop block-link-pop-hover block-rounded block-bordered text-center" href="javascript:void(0)">
                    <div class="block-header">
                        <h3 class="block-title font-w700">
                            <i class="fa fa-thumbs-o-up"></i> Startup
                        </h3>
                    </div>
                    <div class="block-content bg-body">
                        <div class="h1 font-w700 mb-10">$39</div>
                        <div class="h5 text-muted">per month</div>
                    </div>
                    <div class="block-content">
                        <p><strong>10</strong> Projects</p>
                        <p><strong>30GB</strong> Storage</p>
                        <p><strong>100</strong> Clients</p>
                        <p><strong>FULL</strong> Support</p>
                    </div>
                    <div class="block-content block-content-full">
                        <span class="btn btn-hero btn-sm btn-rounded btn-noborder btn-success">Sign Up</span>
                    </div>
                </a>
                <!-- END Startup Plan -->
            </div>
            <div class="col-md-6 col-xl-3">
                <!-- Business Plan -->
                <a class="block block-link-pop block-rounded block-bordered text-center" href="javascript:void(0)">
                    <div class="block-header">
                        <h3 class="block-title">Business</h3>
                    </div>
                    <div class="block-content bg-body-light">
                        <div class="h1 font-w700 mb-10">$99</div>
                        <div class="h5 text-muted">per month</div>
                    </div>
                    <div class="block-content">
                        <p><strong>50</strong> Projects</p>
                        <p><strong>100GB</strong> Storage</p>
                        <p><strong>1000</strong> Clients</p>
                        <p><strong>FULL</strong> Support</p>
                    </div>
                    <div class="block-content block-content-full">
                        <span class="btn btn-hero btn-sm btn-rounded btn-noborder btn-alt-success">Sign Up</span>
                    </div>
                </a>
                <!-- END Business Plan -->
            </div>
            <div class="col-md-6 col-xl-3">
                <!-- VIP Plan -->
                <a class="block block-link-pop block-rounded block-bordered text-center" href="javascript:void(0)">
                    <div class="block-header">
                        <h3 class="block-title">VIP</h3>
                    </div>
                    <div class="block-content bg-body-light">
                        <div class="h1 font-w700 mb-10">$249</div>
                        <div class="h5 text-muted">per month</div>
                    </div>
                    <div class="block-content">
                        <p><strong>Unlimited</strong> Projects</p>
                        <p><strong>Unlimited</strong> Storage</p>
                        <p><strong>Unlimited</strong> Clients</p>
                        <p><strong>FULL</strong> Support</p>
                    </div>
                    <div class="block-content block-content-full">
                        <span class="btn btn-hero btn-sm btn-rounded btn-noborder btn-alt-success">Sign Up</span>
                    </div>
                </a>
                <!-- END VIP Plan -->
            </div>
        </div>
    </div>
</div>
<!-- END Pricing Tables -->

<!-- Quick Stats -->
<div class="bg-body-light">
    <div class="content content-full">
        <!-- CountTo ([data-toggle="countTo"] is initialized in Codebase() -> uiHelperCoreAppearCountTo()) -->
        <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
        <div class="row text-center">
            <div class="col-sm-4 py-20">
                <div class="font-size-h1 font-w700 text-black" data-toggle="countTo" data-to="17850" data-after="+">0</div>
                <div class="font-w600 text-muted text-uppercase">New Projects</div>
            </div>
            <div class="col-sm-4 py-20">
                <div class="font-size-h1 font-w700 text-black" data-toggle="countTo" data-to="14960" data-after="+">0</div>
                <div class="font-w600 text-muted text-uppercase">Live Projects</div>
            </div>
            <div class="col-sm-4 py-20">
                <div class="font-size-h1 font-w700 text-black" data-toggle="countTo" data-to="8300" data-after="+">0</div>
                <div class="font-w600 text-muted text-uppercase">Clients</div>
            </div>
        </div>
    </div>
</div>
<!-- END Quick Stats -->

<!-- Call to Action -->
<div class="bg-primary">
    <div class="bg-pattern bg-black-op" style="background-image: url('<?php echo $cb->assets_folder; ?>/img/various/bg-fe-pattern.png');">
        <div class="content">
            <div class="row py-30">
                <div class="col-sm-6 nice-copy">
                    <h3 class="font-w700 text-white mb-10 text-center text-sm-left">Why Choose Us?</h3>
                    <p class="text-body-bg-dark">We value our customers and our goal is to help them achieve their dreams in any way we can. We work hard to save you time and get you up and running as soon as possible. Getting your project live has never been easier.</p>
                </div>
                <div class="col-sm-6 d-flex justify-content-center align-items-center">
                    <a class="btn btn-hero btn-lg btn-rounded btn-alt-primary" href="javascript:void(0)">Request Live Demo</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Call to Action -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>