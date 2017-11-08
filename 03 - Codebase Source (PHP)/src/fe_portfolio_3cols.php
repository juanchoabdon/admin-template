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
                <h1 class="font-w700 text-white mb-10">Project Portfolio</h1>
                <h2 class="h4 font-w400 text-white-op">Check out all our latest projects.</h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Projects -->
<div class="bg-white">
    <div class="content content-full">
        <!-- Project Filtering (.js-filter class is initialized in Codebase() -> uiHelperContentFilter()) -->
        <!-- If data-numbers="true" is added, then the number of the items of each category will be auto added to each category link -->
        <div class="js-filter" data-numbers="true">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-category-link="all">
                        <i class="fa fa-fw fa-th-large mr-5"></i> All
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="mobileapp">
                        <i class="fa fa-fw fa-mobile-phone mr-5"></i> Mobile App
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="desktopapp">
                        <i class="fa fa-fw fa-desktop mr-5"></i> Desktop App
                    </a>
                </li>
            </ul>
            <div class="row items-push py-30">
                <div class="col-sm-6 col-md-4" data-category="mobileapp">
                    <a class="img-link" href="fe_portfolio_single.php">
                        <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/img/various/fe-project-promo1.png" alt="Project 1 Promo">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4" data-category="desktopapp">
                    <a class="img-link" href="fe_portfolio_single.php">
                        <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/img/various/fe-project-promo2.png" alt="Project 2 Promo">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4" data-category="mobileapp">
                    <a class="img-link" href="fe_portfolio_single.php">
                        <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/img/various/fe-project-promo3.png" alt="Project 3 Promo">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4" data-category="mobileapp">
                    <a class="img-link" href="fe_portfolio_single.php">
                        <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/img/various/fe-project-promo4.png" alt="Project 4 Promo">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4" data-category="desktopapp">
                    <a class="img-link" href="fe_portfolio_single.php">
                        <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/img/various/fe-project-promo5.png" alt="Project 5 Promo">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4" data-category="desktopapp">
                    <a class="img-link" href="fe_portfolio_single.php">
                        <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/img/various/fe-project-promo6.png" alt="Project 6 Promo">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4" data-category="mobileapp">
                    <a class="img-link" href="fe_portfolio_single.php">
                        <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/img/various/fe-project-promo2.png" alt="Project 7 Promo">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4" data-category="mobileapp">
                    <a class="img-link" href="fe_portfolio_single.php">
                        <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/img/various/fe-project-promo1.png" alt="Project 8 Promo">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4" data-category="mobileapp">
                    <a class="img-link" href="fe_portfolio_single.php">
                        <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/img/various/fe-project-promo4.png" alt="Project 9 Promo">
                    </a>
                </div>
            </div>
        </div>
        <!-- END Project Filtering -->
    </div>
</div>
<!-- END Projects -->

<!-- Quick Stats -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="row text-center">
            <div class="col-sm-4 py-30">
                <div class="font-size-h1 font-w700 text-black">85</div>
                <div class="font-w600 text-muted text-uppercase">Tickets</div>
            </div>
            <div class="col-sm-4 py-30">
                <div class="font-size-h1 font-w700 text-black">260</div>
                <div class="font-w600 text-muted text-uppercase">Projects</div>
            </div>
            <div class="col-sm-4 py-30">
                <div class="font-size-h1 font-w700 text-black">56</div>
                <div class="font-w600 text-muted text-uppercase">Clients</div>
            </div>
        </div>
    </div>
</div>
<!-- END Quick Stats -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Code -->
<script>
    jQuery(function(){
        // Init page helpers (Content Filtering helper)
        Codebase.helpers('content-filter');
    });
</script>

<?php require 'inc/_global/views/footer_end.php'; ?>