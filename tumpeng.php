<?php
// START
include "include/conn.php";
include "include/assets.php";
// END
include "include/head.php";
include "include/navbar.php";
?>
<title>Tumpeng | Official Webiste tanpatapi.co.id</title>
<div class="after-nav"></div>
<div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(assets/images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container" style="margin-bottom: 380px;">
        <div class="row animate-box" style="margin-bottom: 80px;">
            <div class="signature">
                <div class="col-md-6 text-center fh5co-heading">
                    <div class="d-bl">
                        <div>
                            <font class="f-biasa">Tanpatapi's</font>
                        </div>
                        <div style="margin-right: 100px;margin-top: -30px;">
                            <font class="f-latin">Tumpeng</font>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center fh5co-heading">
                    <div style="text-align: justify;">
                        <font style="color:#414042 !important;">
                            <p>
                                Tanpatapi's Signature merupakan perpaduan masakan khas Nusantara
                                dan Mancanegara dengan bumbu khas melalui tangan ajaib Chef
                                Palitho.
                            </p>
                            <p>
                                Dengan ini, Tanpatapi Kitchen merangkum semua kuliner dari berbagai
                                negara dalam sebuah kotak. Tanpatapi Kitchen siap untuk memanjakan
                                lidah Anda melalui kotak yang kami sajikan.
                            </p>
                        </font>
                    </div>
                </div>
            </div>
        </div>
        <div class="row animate-box" style="margin-bottom: 80px;">
            <div class="signature" style="margin-bottom: 40px;justify-content:space-between">
                <div class="col-md-4 fh5co-heading">
                    <div class="d-bl-menu">
                        <div class="row">
                            <div class="col-md-9">
                                <font class="f-nama-menu">NASI AYAM TANGKAP</font>
                            </div>
                        </div>
                    </div>
                    <div class="d-bl">
                        <div style="margin-top: 10px;margin-bottom: 25px;text-align: justify;">
                            <font style="color:#414042 !important;">
                                <p>
                                    Tanpatapi's Signature merupakan perpaduan masakan khas Nusantara
                                    dan Mancanegara dengan bumbu khas melalui tangan ajaib Chef
                                    Palitho.
                                    Dengan ini, Tanpatapi Kitchen merangkum semua kuliner dari berbagai
                                    negara dalam sebuah kotak. Tanpatapi Kitchen siap untuk memanjakan
                                    lidah Anda melalui kotak yang kami sajikan.
                                </p>
                            </font>
                        </div>
                    </div>
                    <div class="price-img">
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="#" class="btn btn-block btn-default"><i class="fa-solid fa-circle-chevron-right "></i> <?= hargaRupiah(45000); ?> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center fh5co-heading">
                    <div style="margin: 10px;">
                        <div style="background-color: #fff;">
                            <div style="padding: 10px;">
                                <img src="assets/temp/signature/menu1.JPG" class="img-menu-s" alt="Menu 1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "include/button-wa.php";
    ?>
</div>
<?php
include "include/footer.php";
?>