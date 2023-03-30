<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>
<header class="nk-header nk-header-opaque">
    <nav class="nk-navbar nk-navbar-top" style="background-image: url('<?= $navbar; ?>');background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            <div class="nk-nav-table">
                <div class="nav-tanpatapi">
                    <div class="nav-tanpatapi-one">
                        <a href="index.html" class="nk-nav-logo">
                            <img src="<?= $navbarL; ?>" alt="" width="150" class="nk-nav-logo-onscroll">
                            <!-- <img src="<?= $navbarL; ?>" alt="" width="150"> -->
                        </a>
                    </div>
                    <div class="nav-tanpatapi-two">
                        <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                            <?php
                            $QueryMenu = $db->query("SELECT * FROM tb_menu ORDER BY sorder ASC");
                            foreach ($QueryMenu as $rowMenu) :
                                $M = $rowMenu['file'];
                            ?>
                                <li class="<?= $uriSegments[1] == $M ? 'active' : '' ?>">
                                    <a href="<?= $rowMenu['file']; ?>"><?= $rowMenu['menu']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <ul class="nk-nav nk-nav-right nk-nav-icons">
                    <li class="single-icon hidden-lg-up">
                        <a href="#" class="nk-navbar-full-toggle">
                            <span class="nk-icon-burger">
                                <span class="nk-t-1"></span>
                                <span class="nk-t-2"></span>
                                <span class="nk-t-3"></span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<nav class="nk-navbar nk-navbar-full nk-navbar-align-center" id="nk-nav-mobile">
    <div class="nk-navbar-bg">
        <div class="bg-image" style="background: #fba819"></div>
    </div>
    <div class="nk-nav-table">
        <div class="nk-nav-row">
            <div class="container">
                <div class="nk-nav-header">
                    <div class="nk-nav-logo">
                        <a href="index.html" class="nk-nav-logo">
                            <img src="<?= $navbarL; ?>" alt="" width="85">
                        </a>
                    </div>

                    <div class="nk-nav-close nk-navbar-full-toggle">
                        <span class="nk-icon-close"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-nav-row-full nk-nav-row">
            <div class="nano">
                <div class="nano-content">
                    <div class="nk-nav-table">
                        <div class="nk-nav-row nk-nav-row-full nk-nav-row-center nk-navbar-mobile-content">
                            <ul class="nk-nav">
                                <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-nav-row">
            <div class="container">
                <div class="nk-nav-social">
                    <ul>
                        <li><a href="https://twitter.com/nkdevv"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/unvabdesign/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://dribbble.com/_nK"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="https://www.instagram.com/unvab/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>