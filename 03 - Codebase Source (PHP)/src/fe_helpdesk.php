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
                <h1 class="font-w700 text-white mb-10"><i class="fa fa-support"></i> Helpdesk</h1>
                <h2 class="h4 font-w400 text-white-op">Don’t worry, we are always here to assist you.</h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Categories -->
<div class="bg-white">
    <div class="content">
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <a class="block block-transparent block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="py-30 text-center">
                            <div class="mb-10">
                                <i class="si si-user fa-2x text-pulse-light"></i>
                            </div>
                            <div class="font-size-h3 font-w700 text-uppercase text-pulse">Account</div>
                            <div class="font-w600 text-muted">19 Articles</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-transparent block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="py-30 text-center">
                            <div class="mb-10">
                                <i class="si si-rocket fa-2x text-elegance-light"></i>
                            </div>
                            <div class="font-size-h3 font-w700 text-uppercase text-elegance">Features</div>
                            <div class="font-w600 text-muted">32 Articles</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-transparent block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="py-30 text-center">
                            <div class="mb-10">
                                <i class="si si-settings fa-2x text-earth-light"></i>
                            </div>
                            <div class="font-size-h3 font-w700 text-uppercase text-earth">Services</div>
                            <div class="font-w600 text-muted">42 Articles</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-transparent block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="py-30 text-center">
                            <div class="mb-10">
                                <i class="si si-wallet fa-2x text-corporate-light"></i>
                            </div>
                            <div class="font-size-h3 font-w700 text-uppercase text-corporate">Payment</div>
                            <div class="font-w600 text-muted">15 Articles</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END Categories -->

<!-- Search Form -->
<div class="bg-body-light">
    <div class="content content-full text-center">
        <div class="row justify-content-center py-20">
            <div class="col-md-8">
                <form action="fe_helpdesk.php" method="post">
                    <div class="input-group input-group-lg">
                        <input class="form-control" type="text" placeholder="Search for answers..">
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

<!-- FAQ -->
<div class="bg-white">
    <div class="content content-full">
        <div class="row justify-content-center py-30">
            <div class="col-md-8">
                <!-- Introduction -->
                <h3 class="font-w700">Introduction</h3>
                <div id="fe-faq1" role="tablist" aria-multiselectable="true">
                    <div class="block block-bordered block-rounded mb-5">
                        <div class="block-header" role="tab" id="fe-faq1_h1">
                            <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#fe-faq1" href="#fe-faq1_q1" aria-expanded="true" aria-controls="fe-faq1_q1">1.1 Welcome to your own dashboard</a>
                        </div>
                        <div id="fe-faq1_q1" class="collapse show" role="tabpanel" aria-labelledby="fe-faq1_h1">
                            <div class="block-content border-t">
                                <?php $cb->get_text('medium'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="block block-bordered block-rounded mb-5">
                        <div class="block-header" role="tab" id="fe-faq1_h2">
                            <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#fe-faq1" href="#fe-faq1_q2" aria-expanded="true" aria-controls="fe-faq1_q2">1.2 The team behind the project</a>
                        </div>
                        <div id="fe-faq1_q2" class="collapse" role="tabpanel" aria-labelledby="fe-faq1_h2">
                            <div class="block-content border-t">
                                <p>Please check out our <a href="fe_team.php">team page</a>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="block block-bordered block-rounded mb-5">
                        <div class="block-header" role="tab" id="fe-faq1_h3">
                            <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#fe-faq1" href="#fe-faq1_q3" aria-expanded="true" aria-controls="fe-faq1_q3">1.3 What are our values?</a>
                        </div>
                        <div id="fe-faq1_q3" class="collapse" role="tabpanel" aria-labelledby="fe-faq1_h3">
                            <div class="block-content border-t">
                                <?php $cb->get_text('medium', 2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="block block-bordered block-rounded mb-5">
                        <div class="block-header" role="tab" id="fe-faq1_h4">
                            <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#fe-faq1" href="#fe-faq1_q4" aria-expanded="true" aria-controls="fe-faq1_q4">1.4 What are our future plans?</a>
                        </div>
                        <div id="fe-faq1_q4" class="collapse" role="tabpanel" aria-labelledby="fe-faq1_h4">
                            <div class="block-content border-t">
                                <?php $cb->get_text('medium', 2); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Introduction -->

                <!-- Functionality -->
                <h3 class="font-w700 mt-50">Functionality</h3>
                <div id="fe-faq2" role="tablist" aria-multiselectable="true">
                    <div class="block block-bordered block-rounded mb-5">
                        <div class="block-header" role="tab" id="fe-faq2_h1">
                            <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#fe-faq2" href="#fe-faq2_q1" aria-expanded="true" aria-controls="fe-faq2_q1">What are the key features?</a>
                        </div>
                        <div id="fe-faq2_q1" class="collapse" role="tabpanel" aria-labelledby="fe-faq2_h1">
                            <div class="block-content border-t">
                                <?php $cb->get_text('medium'); ?>
                                <ul class="fa-ul list-li-push-sm">
                                    <li>
                                        <i class="fa fa-check fa-li"></i> Fully Responsive
                                    </li>
                                    <li>
                                        <i class="fa fa-check fa-li"></i> API Support
                                    </li>
                                    <li>
                                        <i class="fa fa-check fa-li"></i> Dynamic and real time data
                                    </li>
                                    <li>
                                        <i class="fa fa-check fa-li"></i> Security
                                    </li>
                                </ul>
                                <?php $cb->get_text('medium'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="block block-bordered block-rounded mb-5">
                        <div class="block-header" role="tab" id="fe-faq2_h2">
                            <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#fe-faq2" href="#fe-faq2_q2" aria-expanded="true" aria-controls="fe-faq2_q2">How to use your dashboard?</a>
                        </div>
                        <div id="fe-faq2_q2" class="collapse" role="tabpanel" aria-labelledby="fe-faq2_h2">
                            <div class="block-content border-t">
                                <?php $cb->get_text('small', 3); ?>
                            </div>
                        </div>
                    </div>
                    <div class="block block-bordered block-rounded mb-5">
                        <div class="block-header" role="tab" id="fe-faq2_h3">
                            <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#fe-faq2" href="#fe-faq2_q3" aria-expanded="true" aria-controls="fe-faq2_q3">How easy can I connect to third party services?</a>
                        </div>
                        <div id="fe-faq2_q3" class="collapse" role="tabpanel" aria-labelledby="fe-faq2_h3">
                            <div class="block-content border-t">
                                <?php $cb->get_text('medium'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="block block-bordered block-rounded mb-5">
                        <div class="block-header" role="tab" id="fe-faq2_h4">
                            <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#fe-faq2" href="#fe-faq2_q4" aria-expanded="true" aria-controls="fe-faq2_q4">How secure is my data?</a>
                        </div>
                        <div id="fe-faq2_q4" class="collapse" role="tabpanel" aria-labelledby="fe-faq2_h4">
                            <div class="block-content border-t">
                                <?php $cb->get_text('medium'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Functionality -->

                <!-- Payments -->
                <h3 class="font-w700 mt-50">Payments</h3>
                <div id="fe-faq3" role="tablist" aria-multiselectable="true">
                    <div class="block block-bordered block-rounded mb-5">
                        <div class="block-header" role="tab" id="fe-faq3_h1">
                            <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#fe-faq3" href="#fe-faq3_q1" aria-expanded="true" aria-controls="fe-faq3_q1">What are the available plans?</a>
                        </div>
                        <div id="fe-faq3_q1" class="collapse" role="tabpanel" aria-labelledby="fe-faq3_h1">
                            <div class="block-content border-t">
                                <p>Please check out our <a href="fe_pricing.php">pricing page</a>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="block block-bordered block-rounded mb-5">
                        <div class="block-header" role="tab" id="fe-faq3_h2">
                            <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#fe-faq3" href="#fe-faq3_q2" aria-expanded="true" aria-controls="fe-faq3_q2">What are the available withdrawal options?</a>
                        </div>
                        <div id="fe-faq3_q2" class="collapse" role="tabpanel" aria-labelledby="fe-faq3_h2">
                            <div class="block-content border-t">
                                <div class="row">
                                    <div class="col-md-6 col-xl-4">
                                        <a class="block block-link-pop" href="javascript:void(0)">
                                            <div class="block-content block-content-full text-center">
                                                <i class="fa fa-paypal fa-2x"></i>
                                            </div>
                                            <div class="block-content block-content-full bg-body-light text-center">
                                                <div class="font-w600 mb-5">Paypal</div>
                                                <div class="font-size-sm text-muted">0.5% + .25c</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <a class="block block-link-pop" href="javascript:void(0)">
                                            <div class="block-content block-content-full text-center">
                                                <i class="fa fa-credit-card fa-2x"></i>
                                            </div>
                                            <div class="block-content block-content-full bg-body-light text-center">
                                                <div class="font-w600 mb-5">Credit Card</div>
                                                <div class="font-size-sm text-muted">$7.50 flat fee</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-12 col-xl-4">
                                        <a class="block block-link-pop" href="javascript:void(0)">
                                            <div class="block-content block-content-full text-center">
                                                <i class="fa fa-bank fa-2x"></i>
                                            </div>
                                            <div class="block-content block-content-full bg-body-light text-center">
                                                <div class="font-w600 mb-5">Bank Transfer</div>
                                                <div class="font-size-sm text-muted">$20.00 flat fee</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Payments -->
            </div>
        </div>
    </div>
</div>
<!-- END FAQ -->

<!-- Contact -->
<div class="bg-body-light">
    <div class="content content-full text-center">
        <div class="py-30">
            <h3 class="font-w700 mb-30">Can’t find what you are looking for?</h3>
            <a class="btn btn-hero btn-rounded btn-alt-primary" href="fe_contact.php">
                <i class="fa fa-envelope-open mr-5"></i> Contact Us
            </a>
        </div>
    </div>
</div>
<!-- END Contact -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>