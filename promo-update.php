<?php
// START
include "include/conn.php";
include "include/assets.php";
// END
include "include/head.php";
include "include/navbar.php";

$Qus = $db->query("SELECT * FROM tb_promonupdate WHERE status='1'");
$Rus = mysqli_fetch_array($Qus);
?>
<title>Promo & Update | Official Website</title>
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
            <div class="row vertical-gap" id="samakan">
                <div class="col-lg-6" style="display: grid;justify-content: center;">
                    <div style="margin-top: 15px;text-align: center;">
                        <?= $Rus['description'] ?>
                    </div>
                </div>
            </div>
            <!-- end 1 -->
        </div>
        <!-- Desktop -->
        <div id="promo-update-one">
            <div style="margin-top: 20px;margin-bottom:20px"></div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="nk-blog-isotope nk-isotope nk-isotope-gap nk-isotope-1-cols">
                        <?php
                        $dataTable = $db->query("SELECT * FROM tb_promo ORDER BY rorder ASC");
                        if (mysqli_num_rows($dataTable) > 0) {
                            $no = 0;
                            while ($row = mysqli_fetch_array($dataTable)) {
                                $no++;
                        ?>
                                <!-- START: Promo -->
                                <div class="nk-isotope-item" data-filter="Nature" style="position: absolute; left: 0px; top: 0px;">
                                    <div class="nk-blog-post" style="display: flex;justify-content: space-around;align-items: center;">
                                        <div class="nk-post-thumb" style="margin: -25px 0px -25px -30px !important;">
                                            <a href="#">
                                                <img src="<?= $URLCMS ?>assets/menu/promo/<?= $row['pictures']; ?>" alt="" class="nk-img-stretch" style="width: 450px;">
                                            </a>
                                            <div class="nk-post-category"><a href="#">Promo</a></div>
                                        </div>
                                        <div style="margin-left: 15px;">
                                            <h2 class="nk-post-title h4" id="judul-pu"><a href="#"><?= $row['title']; ?></a></h2>
                                            <div class="nk-post-date" id="judul-pu"><?= $row['datein']; ?></div>
                                            <div class="nk-post-text">
                                                <?= $row['description']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Promo -->
                            <?php } ?>
                        <?php } else { ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div style="margin-top: 20px;margin-bottom:20px"></div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="nk-blog-isotope nk-isotope nk-isotope-gap nk-isotope-1-cols">
                        <!-- START: Update -->

                        <?php
                        $dataTable = $db->query("SELECT * FROM tb_update ORDER BY rorder ASC");
                        if (mysqli_num_rows($dataTable) > 0) {
                            $no = 0;
                            while ($row = mysqli_fetch_array($dataTable)) {
                                $no++;
                        ?>
                                <div class="nk-isotope-item" data-filter="Nature" style="position: absolute; left: 0px; top: 0px;">
                                    <div class="nk-blog-post" style="display: flex;justify-content: space-around;align-items: center;">
                                        <div class="nk-post-thumb" style="margin: -25px 0px -25px -30px !important;">
                                            <a href="#">
                                                <img src="<?= $URLCMS ?>assets/menu/update/<?= $row['pictures']; ?>" alt="" class="nk-img-stretch" style="width: 450px;">
                                            </a>
                                            <div class="nk-post-category"><a href="#">Update</a></div>
                                        </div>
                                        <div style="margin-left: 15px;">
                                            <h2 class="nk-post-title h4" id="judul-pu"><a href="#"><?= $row['title']; ?></a></h2>
                                            <div class="nk-post-date" id="judul-pu"><?= $row['datein']; ?></div>
                                            <div class="nk-post-text">
                                                <?= $row['description']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } else { ?>
                        <?php } ?>
                        <!-- END: Update -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Desktop -->
        <!-- For Mobile -->
        <div style="margin-top: 20px;margin-bottom:20px"></div>
        <div id="promo-update-two">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <!-- START: Posts List -->
                    <div class="nk-blog-isotope nk-isotope nk-isotope-gap nk-isotope-1-cols">

                        <!-- START: Post -->
                        <?php
                        $dataTable = $db->query("SELECT * FROM tb_promo ORDER BY rorder ASC");
                        if (mysqli_num_rows($dataTable) > 0) {
                            $no = 0;
                            while ($row = mysqli_fetch_array($dataTable)) {
                                $no++;
                        ?>
                                <div class="nk-isotope-item" data-filter="Cities">
                                    <div class="nk-blog-post">
                                        <div class="nk-post-thumb">
                                            <a href="#">
                                                <img src="<?= $URLCMS ?>assets/menu/promo/<?= $row['pictures']; ?>" alt="" class="nk-img-stretch">
                                            </a>
                                            <div class="nk-post-category"><a href="#">Promo</a></div>
                                        </div>
                                        <h2 class="nk-post-title h4" id="judul-pu"><a href="#"><?= $row['title']; ?></a></h2>

                                        <div class="nk-post-date" id="judul-pu">
                                            <?= $row['datein']; ?>
                                        </div>

                                        <div class="nk-post-text">
                                            <?= $row['description']; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } else { ?>
                        <?php } ?>
                        <!-- END: Post -->

                        <!-- START: Post -->
                        <?php
                        $dataTable = $db->query("SELECT * FROM tb_update ORDER BY rorder ASC");
                        if (mysqli_num_rows($dataTable) > 0) {
                            $no = 0;
                            while ($row = mysqli_fetch_array($dataTable)) {
                                $no++;
                        ?>
                                <div class="nk-isotope-item" data-filter="Nature">
                                    <div class="nk-blog-post">
                                        <div class="nk-post-thumb">
                                            <a href="#">
                                                <img src="<?= $URLCMS ?>assets/menu/update/<?= $row['pictures']; ?>" alt="" class="nk-img-stretch">
                                            </a>
                                            <div class="nk-post-category"><a href="#">Update</a></div>
                                        </div>
                                        <h2 class="nk-post-title h4"><a href="#"><?= $row['title']; ?></a></h2>

                                        <div class="nk-post-date">
                                            <?= $row['datein']; ?>
                                        </div>

                                        <div class="nk-post-text">
                                            <?= $row['description']; ?>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        <?php } else { ?>
                        <?php } ?>
                        <!-- END: Post -->
                    </div>
                    <!-- END: Posts List -->
                </div>
            </div>
        </div>
        <!-- End For Mobile -->
    </div>
</div>
<?php
include "include/footer.php";
?>