<?php
/**
* frontend/views/inc_footer.php
 *
 * Author: pixelcave
 *
 * The footer of each page (Frontend pages)
 *
 */
?>

<!-- Footer -->
<footer id="page-footer" class="bg-white opacity-0">
    <div class="content content-full">
        <!-- Footer Navigation -->
        <div class="row items-push-2x mt-30">
            <div class="col-6 col-md-4">
                <h3 class="h5 font-w700">Company</h3>
                <ul class="list list-simple-mini font-size-sm">
                    <li>
                        <a class="link-effect font-w600" href="fe_home.php">Home</a>
                    </li>
                    <li>
                        <a class="link-effect font-w600" href="fe_features.php">Features</a>
                    </li>
                    <li>
                        <a class="link-effect font-w600" href="fe_pricing.php">Pricing</a>
                    </li>
                    <li>
                        <a class="link-effect font-w600" href="fe_contact.php">Contact</a>
                    </li>
                    <li>
                        <a class="link-effect font-w600" href="fe_team.php">Team</a>
                    </li>
                    <li>
                        <a class="link-effect font-w600" href="fe_about.php">About</a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-md-4">
                <h3 class="h5 font-w700">Explore</h3>
                <ul class="list list-simple-mini font-size-sm">
                    <li>
                        <a class="link-effect font-w600" href="be_pages_dashboard.php">Dashboard</a>
                    </li>
                    <li>
                        <a class="link-effect font-w600" href="op_auth_signin.php">Sign In</a>
                    </li>
                    <li>
                        <a class="link-effect font-w600" href="op_auth_signup.php">Sign Up</a>
                    </li>
                    <li>
                        <a class="link-effect font-w600" href="fe_helpdesk.php">Helpdesk</a>
                    </li>
                    <li>
                        <a class="link-effect font-w600" href="javascript:void(0)">Privacy Policy</a>
                    </li>
                    <li>
                        <a class="link-effect font-w600" href="javascript:void(0)">Terms &amp; Conditions</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3 class="h5 font-w700">Company LTD</h3>
                <div class="font-size-sm mb-30">
                    1080 Sunshine Valley, Suite 2563<br>
                    San Francisco, CA 85214<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </div>
                <h3 class="h5 font-w700">Our Newsletter</h3>
                <form action="fe_home.php" method="post" onsubmit="return false;">
                    <div class="input-group">
                        <input type="email" class="form-control" id="fe-subscribe-email" name="fe-subscribe-email" placeholder="Your email..">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-secondary">Subscribe</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Footer Navigation -->

        <!-- Copyright Info -->
        <div class="font-size-xs clearfix border-t pt-20 pb-10">
            <div class="float-right">
                Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
            </div>
            <div class="float-left">
                <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank"><?php echo $cb->name . ' ' . $cb->version; ?></a> &copy; <span class="js-year-copy">2017</span>
            </div>
        </div>
        <!-- END Copyright Info -->
    </div>
</footer>
<!-- END Footer -->
