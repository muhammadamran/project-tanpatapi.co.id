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
                                <tr>
                                    <td>Blueberry Roll Tart</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>Charcoal Mini Bread</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>Pandan Roll Tart</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>Strawberry Roll Tart</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>Bolu Kukus</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>Cake Tape</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>Cheese Pandan</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>Chiffon Pandan</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>Eclair</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Fruit Pudding</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>Kue Lumpur</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>Kue Pepe</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Lapis Legit</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>Marmer Cake</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>Mini Choco Donut</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Pie Buah</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>Pisang Choco Bolen</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>Roti Cokelat</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>Soes Fla</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>Soes Fruit</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Wajik</td>
                                    <td>9</td>
                                </tr>
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
                                <tr>
                                    <td>Arem Arem</td>
                                    <td align="right">9</td>
                                </tr>
                                <tr>
                                    <td>Canape Smoke Beef</td>
                                    <td align="right">9</td>
                                </tr>
                                <tr>
                                    <td>Chicken Pie Regular</td>
                                    <td align="right">13</td>
                                </tr>
                                <tr>
                                    <td>Kroket</td>
                                    <td align="right">9</td>
                                </tr>
                                <tr>
                                    <td>Kacang Telor</td>
                                    <td align="right">9</td>
                                </tr>
                                <tr>
                                    <td>Lemper Ayam</td>
                                    <td align="right">9</td>
                                </tr>
                                <tr>
                                    <td>Lumpia</td>
                                    <td align="right">9</td>
                                </tr>
                                <tr>
                                    <td>Macaroni Schotel</td>
                                    <td align="right">11</td>
                                </tr>
                                <tr>
                                    <td>Martabak Telur</td>
                                    <td align="right">9</td>
                                </tr>
                                <tr>
                                    <td>Pastel</td>
                                    <td align="right">9</td>
                                </tr>
                                <tr>
                                    <td>Pisang Keju Bolen</td>
                                    <td align="right">10</td>
                                </tr>
                                <tr>
                                    <td>Risol Mayonaise</td>
                                    <td align="right">9</td>
                                </tr>
                                <tr>
                                    <td>Roti Pisang Keju</td>
                                    <td align="right">9</td>
                                </tr>
                                <tr>
                                    <td>Roti Sosis</td>
                                    <td align="right">8</td>
                                </tr>
                                <tr>
                                    <td>Semer Mendem</td>
                                    <td align="right">9</td>
                                </tr>
                                <tr>
                                    <td>Sosis Solo</td>
                                    <td align="right">9</td>
                                </tr>
                                <tr>
                                    <td>Tahu Isi</td>
                                    <td align="right">12</td>
                                </tr>
                                <tr>
                                    <td>Croissant Plain</td>
                                    <td align="right">10</td>
                                </tr>
                                <tr>
                                    <td>Croissant Cokelat</td>
                                    <td align="right">11</td>
                                </tr>
                                <tr>
                                    <td>Croissant Keju</td>
                                    <td align="right">11</td>
                                </tr>
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