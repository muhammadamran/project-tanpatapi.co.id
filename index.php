<?php
// START
include "include/conn.php";
include "include/assets.php";
// END
include "include/head.php";
include "include/navbar.php";
?>
<title>Snow | Work</title>
<div class="nk-main" style="background-image: url('<?= $background1; ?>');background-repeat: no-repeat;background-size: cover;height: 250vh;">
    <div class="container">
        <div class="nk-portfolio-single">
            <div class="nk-gap-4 mb-14"></div>
            <h1 class="nk-portfolio-title display-4">Video Project</h1>
            <div class="row vertical-gap">
                <div class="col-lg-8">
                    <div class="nk-portfolio-info">
                        <div class="nk-portfolio-text">
                            <p>Nullam lobortis neque turpis, nec tempus sem pharetra at. Donec et quam, ullamcorper velit. Aliquam maximus ullamcorper ligula, at placerat dui hendrerit sed. Sed metus urna, bibendum id tortor, feugiat ipsum. Aliquam vehicula neque sit amet dolor malesuada pretium.</p>
                            <p>Curabitur tristique, felis ut mattis auctor, elit ante laoreet libero, ac lorem quam vitae libero. Suspen disse aliquet eget risus quis vehicula.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <table class="nk-portfolio-details">
                        <tr>
                            <td>
                                <strong>Client:</strong>
                            </td>
                            <td>Anna Doe</td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Date:</strong>
                            </td>
                            <td>06.20.2016</td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Share:</strong>
                            </td>
                            <td>
                                <a href="#" title="Share page on Facebook" data-share="facebook">Facebook</a>,
                                <a href="#" title="Share page on Twitter" data-share="twitter">Twitter</a>,
                                <a href="#" title="Share page on Pinterest" data-share="pinterest">Pinterest</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="nk-gap-4 mt-14"></div>
        </div>
    </div>
</div>
<?php
include "include/button-wa.php";
?>
<?php
include "include/footer.php";
?>