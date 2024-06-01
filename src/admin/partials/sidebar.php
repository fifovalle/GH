<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <h1 class="fw-bolder">TUBES</h1>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <li class="menu-item <?php echo apakahAktif('src/admin/') ? 'active' : ''; ?>">
            <a href="<?php echo $akarUrl; ?>src/admin/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item <?php echo apakahAktif('src/admin/pages/data-admin.php') ? 'active' : ''; ?>">
            <a href="<?php echo $akarUrl; ?>src/admin/pages/data-admin.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user"></i>
                <div data-i18n="Analytics">Data Admin</div>
            </a>
        </li>
        <li class="menu-item <?php echo apakahAktif('src/admin/pages/data-user.php') ? 'active' : ''; ?>">
            <a href="<?php echo $akarUrl; ?>src/admin/pages/data-user.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-group"></i>
                <div data-i18n="Analytics">Data Pengguna</div>
            </a>
        </li>
        <li class="menu-item <?php echo apakahAktif('src/admin/pages/data-product.php') ? 'active' : ''; ?>">
            <a href="<?php echo $akarUrl; ?>src/admin/pages/data-product.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxl-dropbox"></i>
                <div data-i18n="Analytics">Data Produk</div>
            </a>
        </li>
        <li class="menu-item <?php echo apakahAktif('src/admin/pages/data-service.php') ? 'active' : ''; ?>">
            <a href="<?php echo $akarUrl; ?>src/admin/pages/data-service.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-book-reader"></i>
                <div data-i18n="Analytics">Data Jasa</div>
            </a>
        </li>
        <li class="menu-item <?php echo apakahAktif('src/admin/pages/data-banner.php') ? 'active' : ''; ?>">
            <a href="<?php echo $akarUrl; ?>src/admin/pages/data-banner.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                <div data-i18n="Analytics">Data Spanduk</div>
            </a>
        </li>
        <li class="menu-item <?php echo apakahAktif('src/admin/pages/data-news.php') ? 'active' : ''; ?>">
            <a href="<?php echo $akarUrl; ?>src/admin/pages/data-news.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div data-i18n="Analytics">Data Berita</div>
            </a>
        </li>
        <li class="menu-item <?php echo apakahAktif('src/admin/pages/data-testimony.php') ? 'active' : ''; ?>">
            <a href="<?php echo $akarUrl; ?>src/admin/pages/data-testimony.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-star"></i>
                <div data-i18n="Analytics">Data Testimoni</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-transfer-alt"></i>
                <div data-i18n="Analytics">Data Transaksi</div>
            </a>
        </li>
    </ul>
</aside>