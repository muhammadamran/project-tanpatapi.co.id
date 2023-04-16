<?php
// START
include "include/conn.php";
include "include/assets.php";
// END
include "include/head.php";
include "include/navbar.php";
$Qus = $db->query("SELECT * FROM tb_snackbox WHERE status='1'");
$Rus = mysqli_fetch_array($Qus);
?>
<title>Ragam Kudapan | Official Website</title>
<div class="nk-main" style="background-image: url('<?= $URLCMS ?>assets/apps/bg-page/<?= $bg_page ?>');background-repeat: no-repeat;background-size: cover;z-index: 1;" id="hg">
    <div class="container">
        <div class="nk-portfolio-single">
            <div class="nk-gap-3 mb-14"></div>
            <!-- start 1 -->
            <div class="row vertical-gap" id="samakan">
                <div class="col-lg-4">
                    <div style="display: grid;">
                        <div style="line-height: 30px;">
                            <font class="nk-portfolio-title display-4" id="aya"><b><?= $Rus['title']; ?></b></font>
                        </div>
                        <div style="margin-top: -20px;">
                            <font class="nk-portfolio-title display-4" id="gaya"><?= $Rus['subtitle']; ?></font>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="nk-portfolio-info">
                        <div class="nk-portfolio-text">
                            <div class="graph">
                                <?= $Rus['description']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end 1 -->
            <!-- start 2 -->
            <div class="nk-gap-4 mt-14"></div>
            <div class="row vertical-gap" id="samakan">
                <div class="col-lg-12">
                    <div class="nk-portfolio-info">
                        <div class="nk-portfolio-text">
                            <div style="margin: -80px 90px -55px 90px;">
                                <div class="bingkai-signature">
                                    <img src="<?= $URLCMS ?>assets/menu/snackbox/<?= $Rus['pictures']; ?>" class="img-kudapan" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end 2 -->

            <!-- start 2 -->
            <div class="nk-gap-4 mt-14"></div>
            <div class="row vertical-gap" id="samakan" style="align-items: flex-start !important;">
                <div class="col-lg-5">
                    <div style="display: flex;justify-content: end;">
                        <table width="100%" style="font-size: 20px;color: #255d8a;font-weight: 600;">
                            <tbody>
                                <tr>
                                    <td style="text-align: center;" colspan="2">
                                        <center>
                                            <font class="nk-portfolio-title display-4" id="sweet"><b>Sweet</b></font>
                                        </center>
                                    </td>
                                </tr>
                                <?php
                                $dataTableSweet = $db->query("SELECT * FROM tb_ss WHERE type='sweet' ORDER BY id ASC");
                                if (mysqli_num_rows($dataTableSweet) > 0) {
                                    $no = 0;
                                    while ($rowSweet = mysqli_fetch_array($dataTableSweet)) {
                                        $no++;
                                ?>
                                        <tr>
                                            <td><?= $rowSweet['name']; ?></td>
                                            <td align="right"><?= $rowSweet['pcs']; ?></td>
                                        </tr>
                                    <?php } ?>
                                <?php } else { ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-2">
                    <center>
                        <div class="solid"></div>
                    </center>
                </div>
                <div class="col-lg-5">
                    <div style="display: flex;justify-content: end;">
                        <table width="100%" style="font-size: 20px;color: #255d8a;font-weight: 600;">
                            <tbody>
                                <tr>
                                    <td style="text-align: center;" colspan="2">
                                        <center>
                                            <font class="nk-portfolio-title display-4" id="savory"><b>Savory</b></font>
                                        </center>
                                    </td>
                                </tr>
                                <?php
                                $dataTableSavory = $db->query("SELECT * FROM tb_ss WHERE type='savory' ORDER BY id ASC");
                                if (mysqli_num_rows($dataTableSavory) > 0) {
                                    $no = 0;
                                    while ($rowSavory = mysqli_fetch_array($dataTableSavory)) {
                                        $no++;
                                ?>
                                        <tr>
                                            <td><?= $rowSavory['name']; ?></td>
                                            <td align="right"><?= $rowSavory['pcs']; ?></td>
                                        </tr>
                                    <?php } ?>
                                <?php } else { ?>
                                <?php } ?>
                            </tbody>
                        </table>
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