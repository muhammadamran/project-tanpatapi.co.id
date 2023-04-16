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
            $QDataSignature = $db->query("SELECT * FROM tb_tumpeng WHERE type IS NULL AND status='1'");
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
                <?php
                $QDataSignature1 = $db->query("SELECT * FROM tb_tumpeng WHERE type='1' AND status='1'");
                $RDataSignature1 = mysqli_fetch_array($QDataSignature1);
                ?>
                <div class="col-lg-4">
                    <div>
                        <div>
                            <font class="nk-portfolio-title display-4" id="judul-menu"><b><?= $RDataSignature1['title']; ?></b></font>
                        </div>
                        <div class="graph" id="detail-menu">
                            <?= $RDataSignature1['description']; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php
                    $dataTable = $db->query("SELECT * FROM tb_tumpeng_list ORDER BY id ASC");
                    if (mysqli_num_rows($dataTable) > 0) {
                        $no = 0;
                        while ($row = mysqli_fetch_array($dataTable)) {
                            $no++;
                    ?>
                            <div id="dalam-dua">
                                <div id="dalam-tiga">
                                    <div>
                                        <?= $row['pax']; ?> Pax
                                    </div>
                                </div>
                                <div id="dalam-tiga">
                                    <div><b><?= hargaRupiah($row['prices']); ?></b></div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } else { ?>
                    <?php } ?>
                </div>
            </div>
            <?php
            $dataTableT = $db->query("SELECT * FROM tb_tumpeng_menu ORDER BY rorder ASC");
            if (mysqli_num_rows($dataTableT) > 0) {
                $no = 0;
                while ($rowT = mysqli_fetch_array($dataTableT)) {
                    $no++;
            ?>
                    <div class="nk-gap-4 mt-14"></div>
                    <div class="row vertical-gap" id="samakan">
                        <div class="col-lg-4">
                            <div>
                                <div>
                                    <font class="nk-portfolio-title display-4" id="judul-menu"><b><?= $rowT['title']; ?></b></font>
                                </div>
                                <div class="graph" id="detail-menu">
                                    <?= $rowT['description']; ?>
                                </div>
                                <div>
                                    <a class="btn btn-block btn-default-web"><?= hargaRupiah($rowT['prices']); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="nk-portfolio-info" id="tumpeng-mini">
                                <div class="nk-portfolio-text">
                                    <div>
                                        <img src="<?= $URLCMS ?>assets/menu/tumpeng/<?= $rowT['prictures']; ?>" class="img-khas" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
            <?php } ?>
            <div class="nk-gap-4 mt-14"></div>
        </div>
    </div>
</div>
<?php
include "include/footer.php";
?>