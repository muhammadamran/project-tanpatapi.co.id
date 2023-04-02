<?php
// START
include "include/conn.php";
include "include/assets.php";
// END
include "include/head.php";
include "include/navbar.php";
?>
<title>Tanpatapi Signature | Official Website</title>
<div class="nk-main" style="background-image: url('<?= $background1; ?>');background-repeat: no-repeat;background-size: cover;z-index: 1;" id="hg">
    <div class="container">
        <div class="nk-portfolio-single">
            <div class="nk-gap-3 mb-14"></div>
            <!-- start 1 -->
            <div class="row vertical-gap" id="samakan">
                <div class="col-lg-4">
                    <div style="display: grid;">
                        <div style="line-height: 30px;">
                            <font class="nk-portfolio-title display-4" id="aya"><b>Tanpatapi’s</b></font>
                        </div>
                        <div style="margin-top: -20px;">
                            <font class="nk-portfolio-title display-4" id="gaya">Signature</font>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="nk-portfolio-info">
                        <div class="nk-portfolio-text">
                            <div class="graph">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end 1 -->
            <!-- start 2 -->
            <div class="nk-gap-4 mt-14"></div>
            <div class="row vertical-gap" id="samakan">
                <div class="col-lg-4">
                    <div>
                        <div>
                            <font class="nk-portfolio-title display-4" id="judul-menu"><b>NASI AYAM TANGKAP</b></font>
                        </div>
                        <div class="graph" id="detail-menu">
                            <p>
                                Hidangan otentik dari Aceh yang diracik dengan
                                bumbu rahasia Chef Palitho, lengkap dengan Telur
                                Balado Pedas Manis dan Tumis Kacang Panjang yang
                                gurih.
                            </p>
                        </div>
                        <div>
                            <a class="btn btn-block btn-default-web">Rp. 45.000</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="nk-portfolio-info">
                        <div class="nk-portfolio-text">
                            <div>
                                <div class="bingkai-signature">
                                    <img src="<?= $menuSignature ?>menu1.jpg" class="img-siganture" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end 2 -->
            <div class="nk-gap-4 mt-14"></div>
        </div>
    </div>
</div>
<?php
include "include/footer.php";
?>