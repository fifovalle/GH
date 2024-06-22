<div class="row">
    <div class="col-lg-12 col-sm-12 text-center">
        <div class="main-menu-wrap">
            <div class="site-logo">
                <a href="index.html">
                    <img src="assets/img/company-logos/logo_ndaru.jpg" alt="" />
                </a>
            </div>
            <nav class="main-menu">
                <ul>
                    <li class="current-list-item">
                        <a href="<?php echo $akarUrl; ?>src/user/" class="<?php echo apakahAktif('src/user/') ? 'active' : ''; ?>">Beranda</a>
                    </li>
                    <li>
                        <a href="<?php echo $akarUrl; ?>src/user/pages/product.php" class="<?php echo apakahAktif('src/user/pages/product.php') ? 'active' : ''; ?>">Produk</a>
                    </li>
                    <li>
                        <a href="<?php echo $akarUrl; ?>src/user/pages/services.php" class="<?php echo apakahAktif('src/user/pages/services.php') ? 'active' : ''; ?>">Jasa</a>
                    </li>
                    <li><a href="<?php echo $akarUrl; ?>src/user/pages/contact-us.php" class="<?php echo apakahAktif('src/user/pages/contact-us.php') ? 'active' : ''; ?>">Kontak Kami</a></li>
                    <li>
                        <div class="header-icons">
                            <a class="shopping-cart <?php echo apakahAktif('src/user/pages/cart.php') ? 'active' : ''; ?>" href="<?php echo $akarUrl; ?>src/user/pages/cart.php"><i class="fas fa-shopping-cart"></i></a>
                            <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                            <a class="fas fa-cog" data-bs-toggle="dropdown">
                            </a>
                            <ul class="dropdown-menu sub-menu">
                                <li><a class="dropdown-item" href="<?php echo $akarUrl; ?>src/user/pages/profile.php">Profil Saya</a></li>
                                <li><a class="dropdown-item" href="<?php echo $akarUrl; ?>src/user/config/logout.php">keluar</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
            <div class="mobile-menu"></div>
        </div>
    </div>
</div>