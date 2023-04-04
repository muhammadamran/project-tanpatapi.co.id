<footer class="nk-footer" style="background-image: url('<?= $background2; ?>');background-position: center center;background-size: cover;z-index:-1" id="baba">
    <div class="nana-aja"></div>
</footer>
<div class="direct-position">
    <div>
        <a href="https://wa.me/<?= $DWA; ?>" class="tombol-direct" target="_blank">
            <img src="assets/icon/whatsapp.png" class="tombol-wa-icon" alt="Whatsapp">
            &nbsp;<i>(+62) <?= $WA; ?></i>
        </a>
    </div>
</div>
<footer class="nk-footer" style="background-image: url('<?= $footer; ?>');background-repeat: no-repeat;background-size: cover;z-index:-1">
    <div class="nk-footer-cont">
        <div class="nk-gap-4 mt-14"></div>
        <div class="nah-ini-sudah">
            <div style="margin-top:-60px">
                <img src="<?= $logoFooter; ?>" width="130px" alt="Logo Footer">
                <br>
                <br>
            </div>
            <div style="display: flex;justify-content: space-between;align-items: center;margin: -15px;margin-top: 5px;margin-bottom: 10px;">
                <a href="">
                    <img src="assets/icon/whatsapp.png" width="25px" alt="Whatsapp">
                </a>
                <a href="">
                    <img src="assets/icon/instagram.png" width="25px" alt="Instagram">
                </a>
                <a href="">
                    <img src="assets/icon/mail.png" width="25px" alt="Mail">
                </a>
                <a href="">
                    <img src="assets/icon/pin.png" width="25px" alt="Address">
                </a>
            </div>
            <div>
                <font class="f-tanpatapi">
                    &copy; tanpatapi.co.id
                    <?php if (date('Y') == '2023') { ?>
                        <?= date('Y'); ?>
                    <?php } else { ?>
                        2023 - <?= date('Y'); ?>
                    <?php } ?>
                </font>
            </div>
        </div>
        <div class="nah-ini">
            <!-- Hub -->
            <div>
                <div>
                    <font class="hubungi-kami"><i>Hubungi Kami</i></font>
                    <br>
                    <br>
                </div>
                <div>
                    <!-- Whatsapp -->
                    <div class="dada-oke">
                        <div>
                            <img src="assets/icon/whatsapp.png" width="25px" alt="Whatsapp">
                        </div>
                        <div style="margin-left: 10px;text-align: initial;">
                            <font class="hubungi-kami-list"><i>(+62) <?= $WA; ?></i></font>
                        </div>
                    </div>
                    <!-- Instagram -->
                    <div class="dada-oke">
                        <div>
                            <img src="assets/icon/instagram.png" width="25px" alt="Instagram">
                        </div>
                        <div style="margin-left: 10px;text-align: initial;">
                            <font class="hubungi-kami-list"><i><?= $IG; ?></i></font>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="dada-oke">
                        <div>
                            <img src="assets/icon/mail.png" width="25px" alt="Mail">
                        </div>
                        <div style="margin-left: 10px;text-align: initial;">
                            <font class="hubungi-kami-list"><i><?= $GM; ?></i></font>
                        </div>
                    </div>
                    <!-- Location -->
                    <div class="dada-oke">
                        <div>
                            <img src="assets/icon/pin.png" width="25px" alt="Address">
                        </div>
                        <div style="margin-left: 10px;text-align: initial;">
                            <font class="hubungi-kami-list"><i><?= $LO; ?></i></font>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Logo -->
            <div>
                <div>
                    <img src="<?= $logoFooter; ?>" width="130px" alt="Logo Footer">
                    <br>
                    <br>
                </div>
                <div>
                    <font class="f-tanpatapi">
                        &copy; tanpatapi.co.id
                        <?php if (date('Y') == '2023') { ?>
                            <?= date('Y'); ?>
                        <?php } else { ?>
                            2023 - <?= date('Y'); ?>
                        <?php } ?>
                    </font>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="assets/js/combined.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".preloader").fadeOut();
    });

    var x = document.getElementById("mylocation");

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }

    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude + ", Longitude: " + position.coords.longitude;
    }
</script>
</body>

</html>