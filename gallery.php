<?php
// START
include "include/conn.php";
include "include/assets.php";
// END
include "include/head.php";
include "include/navbar.php";
?>
<title>Gallery | Official Website</title>
<div class="nk-main" style="background-image: url('<?= $URLCMS ?>assets/apps/bg-page/<?= $bg_page ?>');background-repeat: no-repeat;background-size: cover;z-index: 1;" id="hg">
    <div class="container">
        <div class="nk-portfolio-single">
            <div class="nk-gap-3 mb-14"></div>
            <!-- start 1 -->
            <div class="row vertical-gap" id="samakan">
                <div class="col-lg-12" style="display: grid;justify-content: center;">
                    <div>
                        <div style="line-height: 30px;">
                            <font class="nk-portfolio-title display-4" id="ayaBesar"><b>Gallery</b></font>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end 1 -->
        </div>
        <div class="nk-gap-3 mb-14"></div>
        <div class="nk-portfolio-list nk-isotope nk-isotope-3-cols">

            <?php
            $dataTable = $db->query("SELECT * FROM tb_gallery ORDER BY rorder ASC");
            if (mysqli_num_rows($dataTable) > 0) {
                $no = 0;
                while ($row = mysqli_fetch_array($dataTable)) {
                    $no++;
            ?>
                    <div class="nk-isotope-item" data-filter="Mockup">
                        <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                            <a href="#" class="nk-portfolio-item-link"></a>
                            <div class="nk-portfolio-item-image">
                                <div style="background-image: url('<?= $URLCMS ?>assets/gallery/<?= $row['pictures'] ?>');"></div>
                            </div>
                            <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                                <div>
                                    <h2 class="portfolio-item-title h3"><?= $row['title']; ?></h2>
                                    <div class="portfolio-item-category"><?= $row['subtitle']; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
            <?php } ?>

        </div>

        <div class="nk-gap-4"></div>
    </div>
</div>
<?php
include "include/footer.php";
?>