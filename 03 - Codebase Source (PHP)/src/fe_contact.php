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
                <h1 class="font-w700 text-white mb-10">Get In Touch</h1>
                <h2 class="h4 font-w400 text-white-op">Do you have any questions or need our help?</h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Section -->
<div class="bg-white">
    <div class="content content-full">
        <div class="row justify-content-center py-50">
            <div class="col-lg-6">
                <form class="js-validation-fe-contact" action="fe_contact.php" method="post">
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="fe-contact-name">Name</label>
                            <input type="text" class="form-control form-control-lg" id="fe-contact-name" name="fe-contact-name" placeholder="Enter your name..">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" for="fe-contact-email">Email</label>
                        <div class="col-12">
                            <input type="email" class="form-control form-control-lg" id="fe-contact-email" name="fe-contact-email" placeholder="Enter your email..">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" for="fe-contact-subject">Where?</label>
                        <div class="col-12">
                            <select class="form-control form-control-lg" id="fe-contact-subject" name="fe-contact-subject">
                                <option value="1">Support</option>
                                <option value="2">Billing</option>
                                <option value="3">Management</option>
                                <option value="4">Feature Request</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" for="fe-contact-message">Message</label>
                        <div class="col-12">
                            <textarea class="form-control form-control-lg" id="fe-contact-message" name="fe-contact-message" rows="10" placeholder="Enter your message.."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-hero btn-rounded btn-alt-primary min-width-175">
                                <i class="fa fa-send mr-5"></i> Send Message
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Section -->

<!-- Google Maps, functionality is initialized in js/pages/fe_contact.js, for more examples you can check out https://hpneo.github.io/gmaps/ -->
<div id="js-map-fe-contact" style="height: 380px;"></div>

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
<!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $cb->google_maps_api_key; ?>"></script>
<?php $cb->get_js('js/plugins/gmapsjs/gmaps.min.js'); ?>
<?php $cb->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/fe_contact.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>