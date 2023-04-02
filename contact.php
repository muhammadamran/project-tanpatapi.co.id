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
                <h2 class="display-4" id="judul-menu">Hubungi Kami:</h2>
                <div class="nk-gap mnt-3"></div>
                <div style="color:#252525;text-align: justify;">
                    <p>Praesent interdum congue mauris, et fringilla lacus pel vitae. Quisque nisl mauris, aliquam eu ultrices vel, conse vitae sapien at imperdiet risus. Quisque cursus risus id. fermentum, in auctor quam consectetur.</p>
                </div>
                <ul class="nk-contact-info">
                    <div>
                        <!-- Whatsapp -->
                        <div class="dada-oke">
                            <div>
                                <img src="assets/icon/whatsapp.png" width="25px" alt="Whatsapp">
                            </div>
                            <div style="margin-left: 10px;text-align: initial;">
                                <font class="hubungi-kami-contact"><i>(+62) <?= $WA; ?></i></font>
                            </div>
                        </div>
                        <!-- Instagram -->
                        <div class="dada-oke">
                            <div>
                                <img src="assets/icon/instagram.png" width="25px" alt="Instagram">
                            </div>
                            <div style="margin-left: 10px;text-align: initial;">
                                <font class="hubungi-kami-contact"><i><?= $IG; ?></i></font>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="dada-oke">
                            <div>
                                <img src="assets/icon/mail.png" width="25px" alt="Mail">
                            </div>
                            <div style="margin-left: 10px;text-align: initial;">
                                <font class="hubungi-kami-contact"><i><?= $GM; ?></i></font>
                            </div>
                        </div>
                        <!-- Location -->
                        <div class="dada-oke">
                            <div>
                                <img src="assets/icon/pin.png" width="25px" alt="Address">
                            </div>
                            <div style="margin-left: 10px;text-align: initial;">
                                <font class="hubungi-kami-contact"><i><?= $LO; ?></i></font>
                            </div>
                        </div>
                    </div>
                </ul>
                <!-- END: Info -->
            </div>
            <div class="col-lg-7">
                <!-- START: Form -->
                <form action="#" class="nk-form nk-form-ajax">
                    <div class="row vertical-gap">
                        <div class="col-md-12">
                            <input type="text" class="form-control required" name="name" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <input type="email" class="form-control required" name="email" placeholder="Your Email">
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control required" name="phone" placeholder="Your Phone">
                        </div>
                    </div>
                    <div class="nk-gap-1"></div>
                    <input type="text" class="form-control required" name="title" placeholder="Your Title">
                    <div class="nk-gap-1"></div>
                    <textarea class="form-control required" name="message" rows="8" placeholder="Write a message here" aria-required="true"></textarea>
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