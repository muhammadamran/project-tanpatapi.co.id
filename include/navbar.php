<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>
<nav class="fh5co-nav" role="navigation" style="background-image: url('<?= $navbar; ?>');">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center logo-wrap">
                    <div id="fh5co-logo">
                        <a href="index.php">
                            <img src="<?= $logo; ?>" class="nav-logo-tt" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 text-center menu-1 menu-wrap">
                    <ul>
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

        </div>
    </div>
</nav>