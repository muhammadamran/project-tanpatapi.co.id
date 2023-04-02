<?php
// START
include "include/conn.php";
include "include/assets.php";
// END
include "include/head.php";
include "include/navbar.php";
?>
<title>Hubungi Kami | Official Website</title>
<div class="nk-main" style="background-image: url('<?= $background1; ?>');background-repeat: no-repeat;background-size: cover;z-index: 1;" id="hg">
    <div class="container" id="contact">
        <div class="nk-gap-5"></div>
        <div class="row vertical-gap">
            <div class="col-lg-5">
                <!-- START: Info -->
                <h2 class="display-4">Contact Info:</h2>
                <div class="nk-gap mnt-3"></div>

                <p>Praesent interdum congue mauris, et fringilla lacus pel vitae. Quisque nisl mauris, aliquam eu ultrices vel, conse vitae sapien at imperdiet risus. Quisque cursus risus id. fermentum, in auctor quam consectetur.</p>

                <ul class="nk-contact-info">
                    <li>
                        <strong>Address:</strong> 10111 Santa Monica Boulevard, LA
                    </li>
                    <li>
                        <strong>Phone:</strong> +44 987 065 908
                    </li>
                    <li>
                        <strong>Email:</strong> info@Example.com
                    </li>
                    <li>
                        <strong>Fax:</strong> +44 987 065 909
                    </li>
                </ul>
                <!-- END: Info -->
            </div>
            <div class="col-lg-7">
                <!-- START: Form -->
                <form action="#" class="nk-form nk-form-ajax">
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <input type="text" class="form-control required" name="name" placeholder="Your Name">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control required" name="email" placeholder="Your Email">
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <input type="text" class="form-control required" name="title" placeholder="Your Title">

                    <div class="nk-gap-1"></div>
                    <textarea class="form-control required" name="message" rows="8" placeholder="Your Comment" aria-required="true"></textarea>
                    <div class="nk-gap-1"></div>
                    <div class="nk-form-response-success"></div>
                    <div class="nk-form-response-error"></div>
                    <button class="nk-btn">Send Message</button>
                </form>
                <!-- END: Form -->
            </div>
        </div>
        <div class="nk-gap-5"></div>
    </div>
</div>
<?php
include "include/footer.php";
?>