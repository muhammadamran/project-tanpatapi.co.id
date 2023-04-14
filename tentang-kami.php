<?php
// START
include "include/conn.php";
include "include/assets.php";
// END
include "include/head.php";
include "include/navbar.php";

$Qus = $db->query("SELECT * FROM tb_about WHERE status='1'");
$Rus = mysqli_fetch_array($Qus);
?>
<title>Tentang Kami | Official Website</title>
<div class="nk-main" style="background-image: url('<?= $URLCMS ?>assets/apps/bg-page/<?= $bg_page ?>');background-repeat: no-repeat;background-size: cover;z-index: 1;" id="hg">
    <div class="container">
        <div class="nk-portfolio-single">
            <div class="nk-gap-3 mb-14"></div>
            <!-- start 1 -->
            <div class="row vertical-gap" id="samakan">
                <div class="col-lg-12" style="display: grid;justify-content: center;">
                    <div>
                        <div style="line-height: 30px;">
                            <font class="nk-portfolio-title display-4" id="ayaBesar"><b><?= $Rus['title'] ?></b></font>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end 1 -->
            <!-- start 2 -->
            <div class="nk-gap-6 mt-14"></div>
            <div class="row vertical-gap" id="samakan">
                <div class="col-lg-12">
                    <div class="nk-portfolio-info">
                        <div class="nk-portfolio-text">
                            <div style="margin: -80px 90px -55px 90px;">
                                <div class="bingkai-signature">
                                    <img src="<?= $URLCMS ?>/assets/about/<?= $Rus['pictures'] ?>" class="img-kudapan" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end 2 -->
            <!-- start 1 -->
            <div class="nk-gap-6 mt-14"></div>
            <div class="row vertical-gap" id="samakan">
                <div class="col-lg-12" style="display: grid;justify-content: center;">
                    <div>
                        <div style="line-height: 30px;">
                            <font class="nk-portfolio-title display-4" id="gaya" style="font-size: 60px !important;"><?= $Rus['slogan'] ?></font>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-gap-6 mt-14"></div>
            <div class="row vertical-gap" id="samakan">
                <div class="col-lg-12">
                    <div class="nk-portfolio-info">
                        <div class="nk-portfolio-text">
                            <div id="ola-oke">
                                <div class="bingkai-tt">
                                    <div style="line-height: 30px;margin: -30px 250px -10px 250px;background: #fff9ed;">
                                        <font class="nk-portfolio-title display-4" id="aya"><b><?= $Rus['boxtitle'] ?></b></font>
                                    </div>
                                    <div>
                                        <div class="graph-tt">
                                            <?= $Rus['description'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end 1 -->
            <div class="nk-gap-4 mt-14"></div>
        </div>
    </div>
</div>
<?php
include "include/footer.php";
?>