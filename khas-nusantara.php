<?php
// START
include "include/conn.php";
include "include/assets.php";
// END
include "include/head.php";
include "include/navbar.php";
?>
<title>Khas Nusantara | Official Website</title>
<div class="nk-main" style="background-image: url('<?= $URLCMS ?>assets/apps/bg-page/<?= $bg_page ?>');background-repeat: no-repeat;background-size: cover;z-index: 1;" id="hg">
    <div class="container">
        <div class="nk-portfolio-single">
            <div class="nk-gap-3 mb-14"></div>
            <!-- start 1 -->
            <?php
            $QDataSignature = $db->query("SELECT * FROM tb_khas WHERE status='1'");
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
            <!-- start 2 -->
            <?php
            $dataTable = $db->query("SELECT * FROM tb_khas_menu WHERE type='1' ORDER BY rorder ASC");
            if (mysqli_num_rows($dataTable) > 0) {
                $no = 0;
                while ($row = mysqli_fetch_array($dataTable)) {
                    $no++;
            ?>
                    <div class="nk-gap-4 mt-14"></div>
                    <div class="row vertical-gap" id="samakan">
                        <div class="col-lg-4">
                            <div>
                                <div>
                                    <font class="nk-portfolio-title display-4" id="judul-menu"><b><?= $row['title'] ?></b></font>
                                </div>
                                <div class="graph" id="detail-menu">
                                    <?= $row['description'] ?>
                                </div>
                                <div>
                                    <a class="btn btn-block btn-default-web"><?= hargaRupiah($row['prices']); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="nk-portfolio-info">
                                <div class="nk-portfolio-text">
                                    <div>
                                        <div class="bingkai-signature">
                                            <img src="<?= $URLCMS ?>assets/menu/khas/<?= $row['pictures']; ?>" class="img-siganture" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
            <?php } ?>
            <!-- end 2 -->
            <!-- with out images -->
            <div class="nk-gap-4 mt-14"></div>
            <div class="row vertical-gap" id="khas-kansama" style="align-items: end !important;">
                <div class="nk-gap-1 mt-14"></div>
                <?php
                $QKhas1 = $db->query("SELECT * FROM tb_khas_menu WHERE type='2' AND id='1'");
                $RKhas1 = mysqli_fetch_array($QKhas1);
                ?>
                <div class="col-lg-6">
                    <div>
                        <div>
                            <font class="nk-portfolio-title display-4" id="judul-menu"><b><?= $RKhas1['title']; ?></b></font>
                        </div>
                        <div class="graph" id="detail-menu">
                            <p style="padding: 0px 0px 0px 0px;">
                                <?= $RKhas1['description']; ?>
                            </p>
                        </div>
                        <div>
                            <a class="btn btn-block btn-default-web"><?= hargaRupiah($RKhas1['prices']); ?></a>
                        </div>
                    </div>
                </div>
                <div class="nk-gap-1 mt-14"></div>
                <?php
                $QKhas2 = $db->query("SELECT * FROM tb_khas_menu WHERE type='2' AND id='2'");
                $RKhas2 = mysqli_fetch_array($QKhas2);
                ?>
                <div class="col-lg-6">
                    <div>
                        <div>
                            <font class="nk-portfolio-title display-4" id="judul-menu"><b><?= $RKhas2['title']; ?></b></font>
                        </div>
                        <div class="graph" id="detail-menu">
                            <p style="padding: 0px 0px 0px 0px;">
                                <?= $RKhas2['description']; ?>
                            </p>
                        </div>
                        <div>
                            <a class="btn btn-block btn-default-web"><?= hargaRupiah($RKhas2['prices']); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="oke-bagi"></div>
            <div class="row vertical-gap" id="khas-kansama" style="align-items: end !important;">
                <div class="nk-gap-1 mt-14"></div>
                <?php
                $QKhas3 = $db->query("SELECT * FROM tb_khas_menu WHERE type='2' AND id='3'");
                $RKhas3 = mysqli_fetch_array($QKhas3);
                ?>
                <div class="col-lg-6">
                    <div>
                        <div>
                            <font class="nk-portfolio-title display-4" id="judul-menu"><b><?= $RKhas3['title']; ?></b></font>
                        </div>
                        <div class="graph" id="detail-menu">
                            <p style="padding: 0px 0px 0px 0px;">
                                <?= $RKhas3['description']; ?>
                            </p>
                        </div>
                        <div>
                            <a class="btn btn-block btn-default-web"><?= hargaRupiah($RKhas3['prices']); ?></a>
                        </div>
                    </div>
                </div>
                <div class="nk-gap-1 mt-14"></div>
                <?php
                $QKhas4 = $db->query("SELECT * FROM tb_khas_menu WHERE type='2' AND id='4'");
                $RKhas4 = mysqli_fetch_array($QKhas4);
                ?>
                <div class="col-lg-6">
                    <div>
                        <div>
                            <font class="nk-portfolio-title display-4" id="judul-menu"><b><?= $RKhas4['title']; ?></b></font>
                        </div>
                        <div class="graph" id="detail-menu">
                            <p style="padding: 0px 0px 0px 0px;">
                                <?= $RKhas4['description']; ?>
                            </p>
                        </div>
                        <div>
                            <a class="btn btn-block btn-default-web"><?= hargaRupiah($RKhas4['prices']); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end with out images -->
            <div class="nk-gap-4 mt-14"></div>
        </div>
    </div>
</div>
<?php
include "include/footer.php";
?>