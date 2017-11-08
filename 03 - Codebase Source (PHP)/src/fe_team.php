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
                <h1 class="font-w700 text-white mb-10">Team</h1>
                <h2 class="h4 font-w400 text-white-op">Get to know our passionate team.</h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Team -->
<div class="content content-full">
    <div class="row gutters-tiny py-50">
        <div class="col-md-6 col-xl-4">
            <div class="block text-center">
                <div class="block-content">
                    <?php $cb->get_avatar(1, '', 96); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-size-h4 font-w600 mb-0"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-h5 text-muted">Founder</div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="block text-center">
                <div class="block-content">
                    <?php $cb->get_avatar(10, '', 96); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-size-h4 font-w600 mb-0"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-h5 text-muted">Co-Founder</div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="block text-center">
                <div class="block-content">
                    <?php $cb->get_avatar(14, '', 96); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-size-h4 font-w600 mb-0"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-h5 text-muted">Marketing</div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="block text-center">
                <div class="block-content">
                    <?php $cb->get_avatar(12, '', 96); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-size-h4 font-w600 mb-0"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-h5 text-muted">Developer</div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="block text-center">
                <div class="block-content">
                    <?php $cb->get_avatar(13, '', 96); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-size-h4 font-w600 mb-0"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-h5 text-muted">Developer</div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="block text-center">
                <div class="block-content">
                    <?php $cb->get_avatar(9, '', 96); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-size-h4 font-w600 mb-0"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-h5 text-muted">Designer</div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="block text-center">
                <div class="block-content">
                    <?php $cb->get_avatar(6, '', 96); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-size-h4 font-w600 mb-0"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-h5 text-muted">Designer</div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="block text-center">
                <div class="block-content">
                    <?php $cb->get_avatar(3, '', 96); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-size-h4 font-w600 mb-0"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-h5 text-muted">Customer Support</div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="block text-center">
                <div class="block-content">
                    <img class="img-avatar img-avatar96" src="<?php echo $cb->assets_folder; ?>/img/avatars/avatar0.jpg" alt="Your photo">
                </div>
                <div class="block-content block-content-full">
                    <div class="font-size-h4 font-w600 mb-0">You!</div>
                    <div class="font-size-h5 text-muted">Customer Support</div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <a class="btn btn-rounded btn-alt-primary" href="fe_contact.php">
                        <i class="fa fa-pencil mr-5"></i>Apply Today!
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Team -->

<!-- We are hiring -->
<div class="bg-body-light">
    <div class="content content-full text-center">
        <div class="py-30">
            <h3 class="font-w700 mb-10">We Are Hiring!</h3>
            <h4 class="font-w400 text-muted mb-30">Would you like to join our team?</h4>
            <a class="btn btn-hero btn-rounded btn-alt-primary" href="fe_contact.php">Get In Touch</a>
        </div>
    </div>
</div>
<!-- END We are hiring -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>