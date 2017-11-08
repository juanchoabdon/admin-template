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
                <h1 class="font-w700 text-white mb-10">Search</h1>
                <h2 class="h4 font-w400 text-white-op">Find easily what you are looking for.</h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Search Form -->
<div class="bg-white">
    <div class="content content-full text-center">
        <div class="row justify-content-center py-20">
            <div class="col-md-8">
                <form action="fe_search.php" method="post">
                    <div class="input-group input-group-lg">
                        <input class="form-control" type="text" placeholder="Search..">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-secondary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Search Form -->

<!-- Result -->
<div class="bg-body-light">
    <div class="content content-full text-center">
        <div class="font-size-h3 font-w600 py-20">
            <span class="text-primary font-w700">236</span> results were found for <mark class="text-danger">codebase</mark> term
        </div>
    </div>
</div>
<!-- END Result -->

<!-- Search Results -->
<div class="bg-white">
    <div class="content content-full">
        <!-- Results -->
        <div class="row items-push py-30">
            <?php for ($i = 1; $i < 3; $i++) { ?>
            <div class="col-lg-6">
                <h4 class="h5 mb-0">
                    <a href="javascript:void(0)">Codebase - UI Framework</a>
                </h4>
                <div class="font-sm text-earth mb-5">https://pixelcave.com/codebase/</div>
                <p class="font-sm text-muted">Tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
            </div>
            <div class="col-lg-6">
                <h4 class="h5 mb-0">
                    <a href="javascript:void(0)">Codebase - Bootstrap 4</a>
                </h4>
                <div class="font-sm text-earth mb-5">https://pixelcave.com/codebase/</div>
                <p class="font-sm text-muted">Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos..</p>
            </div>
            <div class="col-lg-6">
                <h4 class="h5 mb-0">
                    <a href="javascript:void(0)">Codebase - Admin Dashboard</a>
                </h4>
                <div class="font-sm text-earth mb-5">https://pixelcave.com/codebase/</div>
                <p class="font-sm text-muted">Blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos..</p>
            </div>
            <div class="col-lg-6">
                <h4 class="h5 mb-0">
                    <a href="javascript:void(0)">Codebase - Frontend</a>
                </h4>
                <div class="font-sm text-earth mb-5">https://pixelcave.com/codebase/</div>
                <p class="font-sm text-muted">Lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
            </div>
            <div class="col-lg-6">
                <h4 class="h5 mb-0">
                    <a href="javascript:void(0)">Codebase - Gulp Tasks</a>
                </h4>
                <div class="font-sm text-earth mb-5">https://pixelcave.com/codebase/</div>
                <p class="font-sm text-muted">Metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
            </div>
            <div class="col-lg-6">
                <h4 class="h5 mb-0">
                    <a href="javascript:void(0)">Codebase - Flexbox Enabled</a>
                </h4>
                <div class="font-sm text-earth mb-5">https://pixelcave.com/codebase/</div>
                <p class="font-sm text-muted">Posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos..</p>
            </div>
            <?php } ?>
        </div>
        <!-- END Results -->

        <!-- Pagination -->
        <nav class="py-15" aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                        <span aria-hidden="true">
                            <i class="fa fa-angle-double-left"></i>
                        </span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="javascript:void(0)">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">2</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="javascript:void(0)">...</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">9</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">10</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                        <span aria-hidden="true">
                            <i class="fa fa-angle-double-right"></i>
                        </span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- END Pagination -->
    </div>
</div>
<!-- END Search Results -->

<!-- Promo -->
<div class="bg-body-light">
    <div class="content content-full text-center">
        <div class="py-30">
            <h3 class="font-w700 mb-10">More search results examples?</h3>
            <h4 class="font-w400 text-muted mb-30">Feel free to check out the search page in the backend</h4>
            <a class="btn btn-hero btn-rounded btn-alt-primary" href="be_pages_generic_search.php">
                <i class="fa fa-link mr-5"></i> Search (Backend)
            </a>
        </div>
    </div>
</div>
<!-- END Promo -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>