<?php
// START
include "include/conn.php";
include "include/assets.php";
// END
include "include/head.php";
include "include/navbar.php";
?>
<title>Tanpatapi Signature | Official Website</title>
<div class="nk-main" style="background-image: url('<?= $URLCMS ?>assets/apps/bg-page/<?= $bg_page ?>');background-repeat: no-repeat;background-size: cover;z-index: 1;" id="hg">
    <div class="container">
        <div class="nk-portfolio-single">
            <div class="nk-gap-3 mb-14"></div>
            <!-- start 1 -->
            <?php
            $QDataSignature = $db->query("SELECT * FROM tb_signature WHERE status='1'");
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
            $dataTable = $db->query("SELECT * FROM tb_signature_menu ORDER BY rorder ASC");
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
                                            <img src="<?= $URLCMS ?>assets/menu/signature/<?= $row['pictures']; ?>" class="img-siganture" alt="">
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
            <div class="nk-gap-4 mt-14"></div>
        </div>
    </div>
</div>
<?php
include "include/footer.php";
?>