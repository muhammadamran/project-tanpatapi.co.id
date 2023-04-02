<?php
// START
include "include/conn.php";
include "include/assets.php";
// END
include "include/head.php";
include "include/navbar.php";
?>
<title>Promo & Update | Official Website</title>
<div class="nk-main" style="background-image: url('<?= $background1; ?>');background-repeat: no-repeat;background-size: cover;z-index: 1;" id="hg">
    <div class="container">
        <div class="nk-portfolio-single">
            <div class="nk-gap-3 mb-14"></div>
            <!-- start 1 -->
            <div class="row vertical-gap" id="samakan">
                <div class="col-lg-12" style="display: grid;justify-content: center;">
                    <div>
                        <div style="line-height: 30px;">
                            <font class="nk-portfolio-title display-4" id="ayaBesar"><b>Promo & Update</b></font>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row vertical-gap" id="samakan">
                <div class="col-lg-6" style="display: grid;justify-content: center;">
                    <div style="margin-top: 15px;text-align: center;">
                        Menyantap sajian khas Nusantara dengan racikan spesial dari Chef Palitho,
                        menggunakan beragam racikan bumbu dan rempah berkualitas dan dapat
                        memikat siapapun.
                    </div>
                </div>
            </div>
            <!-- end 1 -->
        </div>
        <div style="margin-top: 20px;margin-bottom:20px"></div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="nk-blog-isotope nk-isotope nk-isotope-gap nk-isotope-1-cols">
                    <!-- START: Promo -->
                    <div class="nk-isotope-item" data-filter="Nature" style="position: absolute; left: 0px; top: 0px;">
                        <div class="nk-blog-post" style="display: flex;justify-content: space-around;align-items: center;">
                            <div class="nk-post-thumb">
                                <a href="blog-single.html">
                                    <img src="assets/temp/tentangkami/tentangkami.jpg" alt="" class="nk-img-stretch" style="width: 450px;">
                                </a>
                                <div class="nk-post-category"><a href="#">Promo</a></div>
                            </div>
                            <div style="margin-left: 15px;">
                                <h2 class="nk-post-title h4" style="color:#fff;font-family: Work Sans, sans-serif;"><a href="blog-single.html">Something I need to tell you</a></h2>
                                <div class="nk-post-date" style="color:#fff;font-family: Work Sans, sans-serif;">September 18, 2016</div>
                                <div class="nk-post-text">
                                    <p>Gathering stars deep he For above open morning fruit blessed, void. Sea seed fruit were don't, days man second. In day isn't own Whales also evening it together.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Promo -->
                </div>
            </div>
        </div>
        <div style="margin-top: 20px;margin-bottom:20px"></div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="nk-blog-isotope nk-isotope nk-isotope-gap nk-isotope-1-cols">
                    <!-- START: Update -->
                    <div class="nk-isotope-item" data-filter="Nature" style="position: absolute; left: 0px; top: 0px;">
                        <div class="nk-blog-post" style="display: flex;justify-content: space-around;align-items: center;">
                            <div class="nk-post-thumb">
                                <a href="blog-single.html">
                                    <img src="assets/temp/tentangkami/tentangkami.jpg" alt="" class="nk-img-stretch" style="width: 450px;">
                                </a>
                                <div class="nk-post-category"><a href="#">Update</a></div>
                            </div>
                            <div style="margin-left: 15px;">
                                <h2 class="nk-post-title h4" style="color:#fff;font-family: Work Sans, sans-serif;"><a href="blog-single.html">Something I need to tell you</a></h2>
                                <div class="nk-post-date" style="color:#fff;font-family: Work Sans, sans-serif;">September 18, 2016</div>
                                <div class="nk-post-text">
                                    <p>Gathering stars deep he For above open morning fruit blessed, void. Sea seed fruit were don't, days man second. In day isn't own Whales also evening it together.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Update -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "include/footer.php";
?>