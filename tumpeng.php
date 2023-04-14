<?php
// START
include "include/conn.php";
include "include/assets.php";
// END
include "include/head.php";
include "include/navbar.php";
?>
<title>Tumpeng | Official Website</title>
<div class="nk-main" style="background-image: url('<?= $URLCMS ?>assets/apps/bg-page/<?= $bg_page ?>');background-repeat: no-repeat;background-size: cover;z-index: 1;" id="hg">
    <div class="container">
        <div class="nk-portfolio-single">
            <div class="nk-gap-3 mb-14"></div>
            <!-- start 1 -->
            <?php
            $QDataSignature = $db->query("SELECT * FROM tb_tumpeng WHERE status='1'");
            $RDataSignature = mysqli_fetch_array($QDataSignature);
            ?>
            <div class="row vertical-gap" id="samakan">
                <div class="col-lg-4">
                    <div style="display: grid;">
                        <div style="line-height: 30px;">
                            <font class="nk-portfolio-title display-4" id="aya"><b><?= $RDataSignature['title']; ?></b></font>
                        </div>
                        <div style="margin-top: -20px;">
                            <font class="nk-portfolio-title display-4" id="gaya"><?= $RDataSignature['subtitle']; ?></font>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="nk-portfolio-info">
                        <div class="nk-portfolio-text">
                            <div class="graph">
                                <?= $RDataSignature['description']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end 1 -->
            <div class="nk-gap-1 mt-14"></div>
            <div class="row vertical-gap" id="samakan">
                <div class="col-lg-12">
                    <div class="nk-portfolio-info">
                        <div class="nk-portfolio-text">
                            <center>
                                <img src="<?= $URLCMS ?>assets/menu/tumpeng/<?= $RDataSignature['pictures']; ?>" width="70%" alt="">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-gap-4 mt-14"></div>
            <div class="row vertical-gap" id="samakan">
                <div class="col-lg-4">
                    <div>
                        <div>
                            <font class="nk-portfolio-title display-4" id="judul-menu"><b>TUMPENG TANPATAPI</b></font>
                        </div>
                        <div class="graph" id="detail-menu">
                            <p>
                                Tumpeng dengan menu yang lengkap dan tersedia
                                dalam beragam ukuran. Setiap Tumpeng Tanpatapi
                                akan tersaji dengan Nasi Kuning yang pulen, Ayam
                                Goreng, Empal Suwir, Kering Tempe Kacang, Telur
                                Dadar Rawis, Perkedel Kentang, Urap, dan Mie
                                Goreng.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div id="dalam-dua">
                        <div id="dalam-tiga">
                            <div>
                                <font style="color:transparent">0</font>5 Pax
                            </div>
                        </div>
                        <div id="dalam-tiga">
                            <div><b>Rp. 300.000</b></div>
                        </div>
                    </div>
                    <div id="dalam-dua">
                        <div id="dalam-tiga">
                            <div>10 Pax</div>
                        </div>
                        <div id="dalam-tiga">
                            <div><b>Rp. 500.000</b></div>
                        </div>
                    </div>
                    <div id="dalam-dua">
                        <div id="dalam-tiga">
                            <div>20 Pax</div>
                        </div>
                        <div id="dalam-tiga">
                            <div><b>Rp. 1000.000</b></div>
                        </div>
                    </div>
                    <div id="dalam-dua">
                        <div id="dalam-tiga">
                            <div>30 Pax</div>
                        </div>
                        <div id="dalam-tiga">
                            <div><b>Rp. 1.400.000</b></div>
                        </div>
                    </div>
                    <div id="dalam-dua">
                        <div id="dalam-tiga">
                            <div>40 Pax</div>
                        </div>
                        <div id="dalam-tiga">
                            <div><b>Rp. 1.700.000</b></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-gap-4 mt-14"></div>
            <div class="row vertical-gap" id="samakan">
                <div class="col-lg-4">
                    <div>
                        <div>
                            <font class="nk-portfolio-title display-4" id="judul-menu"><b>TUMPENG MINI</b></font>
                        </div>
                        <div class="graph" id="detail-menu">
                            <p>
                                Sajian tepat untuk beragam acaramu. Tanpatapi
                                Kitchen menyajikan tumpeng mini yang cocok
                                disantap untuk porsi satu orang. Di setiap Tumpeng
                                Mini, tersaji Nasi Kuning yang pulen, Ayam Goreng,
                                Empal Suwir, Kering Tempe Kacang, Telur Dadar
                                Rawis, Perkedel Kentang, Urap, dan Mie Goreng.
                                Lengkap dan mengenyangkan.
                            </p>
                        </div>
                        <div>
                            <a class="btn btn-block btn-default-web">Rp. 45.000</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="nk-portfolio-info" id="tumpeng-mini">
                        <div class="nk-portfolio-text">
                            <div>
                                <img src="assets/temp/tumpeng/tumpeng-mini.png" class="img-khas" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-gap-4 mt-14"></div>
        </div>
    </div>
</div>
<?php
include "include/footer.php";
?>