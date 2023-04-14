<?php
// START
include "include/conn.php";
include "include/assets.php";
// END
include "include/head.php";
include "include/navbar.php";

// GET BROWSER
function getBrowser()
{
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $browser = "N/A";

    $browsers = [
        '/msie/i' => 'Internet explorer',
        '/firefox/i' => 'Firefox',
        '/safari/i' => 'Safari',
        '/chrome/i' => 'Chrome',
        '/edge/i' => 'Edge',
        '/opera/i' => 'Opera',
        '/mobile/i' => 'Mobile browser',
    ];

    foreach ($browsers as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $browser = $value;
        }
    }

    return $browser;
}

// GET IP SERVER
function get_client_ip()
{
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if (getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if (getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if (getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if (getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if (getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

// Device
$isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));

if ($isMob) {
    $device = 'Mobile Device';
} else {
    $device = 'Desktop';
}

if (isset($_POST["send_"])) {

    $Name       = $_POST['name'];
    $Email      = $_POST['email'];
    $Phone      = $_POST['phone'];
    $Title      = $_POST['title'];
    $Message    = $_POST['message'];
    $ip         = get_client_ip();
    $browser    = getBrowser();
    $device     = $device;
    $location   = $_POST['location'];
    $date       = date('Y-m-d H:i');

    $query = $db->query("INSERT INTO tb_subscribe
    (id,name,email,phone,title,message,ip,browser,device,location_users,datetime_m)
    VALUES
    ('','$Name','$Email','$Phone','$Title','$Message','$ip','$browser','$device','$location','$date')");

    if ($query) {
        echo "<script>window.location.href='contact.php?InputSuccess=true&n=$Name';</script>";
    } else {
        echo "<script>window.location.href='contact.php?InputFailed=true&n=$Name';</script>";
    }
}
?>
<title>Hubungi Kami | Official Website</title>
<div class="nk-main" style="background-image: url('<?= $URLCMS ?>assets/apps/bg-page/<?= $bg_page ?>');background-repeat: no-repeat;background-size: cover;z-index: 1;" id="hg">
    <div class="container" id="contact">
        <div class="nk-gap-5"></div>
        <div class="row vertical-gap">
            <div class="col-lg-5">
                <!-- START: Info -->
                <h2 class="display-4" id="judul-menu"><?= $RloadContact['title']; ?></h2>
                <div class="nk-gap mnt-3"></div>
                <div style="color:#252525;text-align: justify;">
                    <?= $RloadContact['description']; ?>
                </div>
                <ul class="nk-contact-info">
                    <div>
                        <!-- Whatsapp -->
                        <div class="dada-oke">
                            <div>
                                <img src="assets/icon/whatsapp.png" width="25px" alt="Whatsapp">
                            </div>
                            <div style="margin-left: 10px;text-align: initial;">
                                <font class="hubungi-kami-contact"><i><?= $RloadContact['whatsapp']; ?></i></font>
                            </div>
                        </div>
                        <!-- Instagram -->
                        <div class="dada-oke">
                            <div>
                                <img src="assets/icon/instagram.png" width="25px" alt="Instagram">
                            </div>
                            <div style="margin-left: 10px;text-align: initial;">
                                <font class="hubungi-kami-contact"><i><?= $RloadContact['instagram']; ?></i></font>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="dada-oke">
                            <div>
                                <img src="assets/icon/mail.png" width="25px" alt="Mail">
                            </div>
                            <div style="margin-left: 10px;text-align: initial;">
                                <font class="hubungi-kami-contact"><i><?= $RloadContact['email']; ?></i></font>
                            </div>
                        </div>
                        <!-- Location -->
                        <div class="dada-oke">
                            <div>
                                <img src="assets/icon/pin.png" width="25px" alt="Address">
                            </div>
                            <div style="margin-left: 10px;text-align: initial;">
                                <font class="hubungi-kami-contact"><i><?= $RloadContact['address']; ?></i></font>
                            </div>
                        </div>
                    </div>
                </ul>
                <!-- END: Info -->
            </div>
            <div class="col-lg-7">
                <!-- START: Form -->
                <form action="" class="nk-form nk-form-ajax" method="POST">
                    <div class="row vertical-gap">
                        <div class="col-md-12">
                            <input type="text" class="form-control required" name="name" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <input type="email" class="form-control required" name="email" placeholder="Your Email">
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control required" name="phone" placeholder="Your Phone">
                        </div>
                    </div>
                    <div class="nk-gap-1"></div>
                    <input type="text" class="form-control required" name="title" placeholder="Your Title">
                    <div class="nk-gap-1"></div>
                    <textarea class="form-control required" name="message" rows="8" placeholder="Write a message here" aria-required="true"></textarea>
                    <textarea hidden class="form-control" name="location" id="mylocation"></textarea>
                    <div class="nk-gap-1"></div>
                    <div class="nk-form-response-success"></div>
                    <div class="nk-form-response-error"></div>
                    <button class="nk-btn" name="send_">Send Message</button>
                </form>
                <!-- END: Form -->
            </div>
        </div>
        <div class="nk-gap-5"></div>
    </div>
</div>
<style>
    .swal2-popup {
        display: none;
        position: relative;
        box-sizing: border-box;
        flex-direction: column;
        justify-content: center;
        width: 32em;
        max-width: 100%;
        padding: 1.25em;
        border: none;
        border-radius: 20px;
        background: #f99d1b;
        font-family: inherit;
        font-size: 1rem;
    }

    .swal2-styled.swal2-confirm {
        border: 0;
        border-radius: 20px;
        background: initial;
        background-color: #255d8a;
        color: #fff;
        font-size: 1.0625em;
    }
</style>
<script type="text/javascript">
    // Success
    if (window?.location?.href?.indexOf('InputSuccess') > -1) {
        Swal.fire({
            html: '<font style="font-size: 18px;font-weight: 500;color: #f1f1f1;line-height: 10px;letter-spacing: 0px;">Hai, <?= $_GET['n']; ?> <b>Terimakasih atas pesan yang anda berikan</b><br>Salam dari tanpatapi.com</font><br>',
            imageUrl: 'assets/svg/envelope-animate.svg',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',
        })
        history.replaceState({}, '', './contact.php');
    }

    // Failed
    if (window?.location?.href?.indexOf('InputFailed') > -1) {
        Swal.fire({
            html: '<font style="font-size: 18px;font-weight: 500;color: #f1f1f1;line-height: 10px;letter-spacing: 0px;">Hai, <?= $_GET['n']; ?> Pesan anda gagal dikirim, silahkan input pesan anda kembali</font><br>',
            imageUrl: 'assets/svg/forgot-password-animate.svg',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',
        })
        history.replaceState({}, '', './contact.php');
    }
</script>
<?php
include "include/footer.php";
?>