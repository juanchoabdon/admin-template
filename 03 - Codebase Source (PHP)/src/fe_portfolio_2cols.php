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
        <div class="js-filter">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-category-link="all">
                        <i class="fa fa-fw fa-th-large mr-5"></i> All
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="design">
                        <i class="fa fa-fw fa-paint-brush mr-5"></i> Design
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="development">
                        <i class="fa fa-fw fa-code mr-5"></i> Development
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="marketing">
                        <i class="fa fa-fw fa-line-chart mr-5"></i> Marketing
                    </a>
                </li>
            </ul>
            <div class="row items-push py-30">
                <div class="col-sm-6" data-category="design">
                    <div class="options-container fx-item-zoom-in">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/img/various/fe-project-promo1.png" alt="Project 1 Promo">
                        <div class="options-overlay bg-black-op-75">
                            <div class="options-overlay-content">
                                <h3 class="h4 text-white mb-5">Project X</h3>
                                <h4 class="h5 font-w400 text-white-op">Web Application Design</h4>
                                <a class="btn btn-hero btn-sm btn-rounded btn-alt-primary min-width-100" href="fe_portfolio_single.php">
                                    <i class="fa fa-eye"></i> View Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" data-category="development">
                    <div class="options-container fx-item-zoom-in">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/img/various/fe-project-promo2.png" alt="Project 2 Promo">
                        <div class="options-overlay bg-black-op-75">
                            <div class="options-overlay-content">
                                <h3 class="h4 text-white mb-5">Project E</h3>
                                <h4 class="h5 font-w400 text-white-op">Web Development</h4>
                                <a class="btn btn-hero btn-sm btn-rounded btn-alt-primary min-width-100" href="fe_portfolio_single.php">
                                    <i class="fa fa-eye"></i> View Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" data-category="marketing">
                    <div class="options-container fx-item-zoom-in">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/img/various/fe-project-promo3.png" alt="Project 3 Promo">
                        <div class="options-overlay bg-black-op-75">
                            <div class="options-overlay-content">
                                <h3 class="h4 text-white mb-5">Project M</h3>
                                <h4 class="h5 font-w400 text-white-op">Market Research</h4>
                                <a class="btn btn-hero btn-sm btn-rounded btn-alt-primary min-width-100" href="fe_portfolio_single.php">
                                    <i class="fa fa-eye"></i> View Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" data-category="design">
                    <div class="options-container fx-item-zoom-in">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/img/various/fe-project-promo4.png" alt="Project 4 Promo">
                        <div class="options-overlay bg-black-op-75">
                            <div class="options-overlay-content">
                                <h3 class="h4 text-white mb-5">Project A</h3>
                                <h4 class="h5 font-w400 text-white-op">Web Application Development</h4>
                                <a class="btn btn-hero btn-sm btn-rounded btn-alt-primary min-width-100" href="fe_portfolio_single.php">
                                    <i class="fa fa-eye"></i> View Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" data-category="development">
                    <div class="options-container fx-item-zoom-in">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/img/various/fe-project-promo5.png" alt="Project 5 Promo">
                        <div class="options-overlay bg-black-op-75">
                            <div class="options-overlay-content">
                                <h3 class="h4 text-white mb-5">Project B</h3>
                                <h4 class="h5 font-w400 text-white-op">Marketing</h4>
                                <a class="btn btn-hero btn-sm btn-rounded btn-alt-primary min-width-100" href="fe_portfolio_single.php">
                                    <i class="fa fa-eye"></i> View Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" data-category="marketing">
                    <div class="options-container fx-item-zoom-in">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/img/various/fe-project-promo6.png" alt="Project 6 Promo">
                        <div class="options-overlay bg-black-op-75">
                            <div class="options-overlay-content">
                                <h3 class="h4 text-white mb-5">Project H</h3>
                                <h4 class="h5 font-w400 text-white-op">CRM Development</h4>
                                <a class="btn btn-hero btn-sm btn-rounded btn-alt-primary min-width-100" href="fe_portfolio_single.php">
                                    <i class="fa fa-eye"></i> View Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" data-category="design">
                    <div class="options-container fx-item-zoom-in">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/img/various/fe-project-promo2.png" alt="Project 7 Promo">
                        <div class="options-overlay bg-black-op-75">
                            <div class="options-overlay-content">
                                <h3 class="h4 text-white mb-5">Project V</h3>
                                <h4 class="h5 font-w400 text-white-op">Logo Design</h4>
                                <a class="btn btn-hero btn-sm btn-rounded btn-alt-primary min-width-100" href="fe_portfolio_single.php">
                                    <i class="fa fa-eye"></i> View Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" data-category="marketing">
                    <div class="options-container fx-item-zoom-in">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/img/various/fe-project-promo1.png" alt="Project 8 Promo">
                        <div class="options-overlay bg-black-op-75">
                            <div class="options-overlay-content">
                                <h3 class="h4 text-white mb-5">Project Y</h3>
                                <h4 class="h5 font-w400 text-white-op">Product Design</h4>
                                <a class="btn btn-hero btn-sm btn-rounded btn-alt-primary min-width-100" href="fe_portfolio_single.php">
                                    <i class="fa fa-eye"></i> View Project
                                </a>
                            </div>
                        </div>
                    </div>
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