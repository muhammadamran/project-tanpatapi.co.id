<footer id="fh5co-footer" role="contentinfo" class="fh5co-section" style="background-image: url('<?= $footer; ?>');">
    <div class="container">
        <div class="row animate-box">
            <div class="signature">
                <div class="col-md-6 text-center fh5co-heading">
                    <div style="margin-bottom: 20px;text-align: left;">
                        <font class="hubungi-kami"><i>Hubungi Kami</i></font>
                    </div>
                    <ul class="fh5co-footer-links">
                        <li>
                            <div style="display:flex;justify-content:flex-start;align-items:flex-start">
                                <div>
                                    <img src="assets/icon/whatsapp.png" width="25px" alt="Whatsapp">
                                </div>
                                <div style="margin-left: 10px;text-align: initial;">
                                    <font class="hubungi-kami-list"><i>(+62) <?= $WA; ?></i></font>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div style="display:flex;justify-content:flex-start;align-items:flex-start">
                                <div>
                                    <img src="assets/icon/instagram.png" width="25px" alt="Instagram">
                                </div>
                                <div style="margin-left: 10px;text-align: initial;">
                                    <font class="hubungi-kami-list"><i><?= $IG; ?></i></font>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div style="display:flex;justify-content:flex-start;align-items:flex-start">
                                <div>
                                    <img src="assets/icon/mail.png" width="25px" alt="Mail">
                                </div>
                                <div style="margin-left: 10px;text-align: initial;">
                                    <font class="hubungi-kami-list"><i><?= $GM; ?></i></font>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div style="display:flex;justify-content:flex-start;align-items:flex-start">
                                <div>
                                    <img src="assets/icon/pin.png" width="25px" alt="Address">
                                </div>
                                <div style="margin-left: 10px;text-align: initial;">
                                    <font class="hubungi-kami-list"><i><?= $LO; ?></i></font>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 text-center fh5co-heading">
                    <div style="margin-bottom: 20px;text-align: center;">
                        <img src="<?= $logoFooter; ?>" width="130px" alt="Logo Footer">
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
    </div>

    <div class="row copyright" id="hellosid">
        <div class="col-md-12 text-center">
            <ul class="fh5co-social-icons" style="margin-top: 0px;">
                <li><a href="https://www.hellos-id.com" target="_blank" style="color: #fff;font-weight: 100;font-size: 14px;"> Powered by <b>HELLOS<sup>ID</sup></b></a></li>
            </ul>
        </div>
    </div>

</footer>
</div>
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/jquery.flexslider-min.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>