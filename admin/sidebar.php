<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
            src="<?= base_url(); ?>/assets/img/admin_icon.png" alt="User Image" width="60px" height="60px">
        <div>
            <p class="app-sidebar__user-name">
                Admin
            </p>
            <p class="app-sidebar__user-designation">Administrator</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item <?= $menu == 'dashboard' ? 'active' : ''; ?>"
                href="<?= base_url_admin(); ?>index.php"><i class="app-menu__icon fa fa-dashboard"></i><span
                    class="app-menu__label">Dasbor</span></a></li>
        <li><a class="app-menu__item <?= $menu == 'kategori' ? 'active' : ''; ?>"
                href="<?= base_url_admin(); ?>kategori/index.php"><i class="app-menu__icon fa fa-list-alt"></i><span
                    class="app-menu__label">Kategori</span></a></li>
        <!--<li><a class="app-menu__item <?= $menu == 'produk' ? 'active' : ''; ?>"
                href="<?= base_url_admin(); ?>produk/index.php"><i class="app-menu__icon fa fa-desktop"></i><span
                    class="app-menu__label">Produk</span></a></li>
        <li><a class="app-menu__item <?= $menu == 'pesanan' ? 'active' : ''; ?>"
                href="<?= base_url_admin(); ?>pesanan/index.php"><i class="app-menu__icon fa fa-money"></i><span
                    class="app-menu__label">Pesanan</span></a></li>
        <li><a class="app-menu__item <?= $menu == 'laporan' ? 'active' : ''; ?>"
                href="<?= base_url_admin(); ?>laporan_pesanan/index.php"><i class="app-menu__icon fa fa-file"></i><span
                    class="app-menu__label">Laporan Pesanan</span></a>
        </li>
        <li><a class="app-menu__item <?= $menu == 'laporan2' ? 'active' : ''; ?>"
                href="<?= base_url_admin(); ?>laporan_produk/index.php"><i class="app-menu__icon fa fa-bar-chart"></i><span
                    class="app-menu__label">Laporan Produk</span></a>
        </li>-->
        <li><a class="app-menu__item <?= $menu == 'berita' ? 'active' : ''; ?>"
                href="<?= base_url_admin(); ?>berita/index.php"><i class="app-menu__icon fa fa-newspaper-o"></i><span
                    class="app-menu__label">Berita</span></a>
        </li>
        <li><a class="app-menu__item <?= $menu == 'popup' ? 'active' : ''; ?>"
                href="<?= base_url_admin(); ?>popup/index.php"><i class="app-menu__icon fa fa-newspaper-o"></i><span
                    class="app-menu__label">Popup</span></a>
        </li>
        <li><a class="app-menu__item <?= $menu == 'statistik' ? 'active' : ''; ?>"
                href="<?= base_url_admin(); ?>statistik_data/index.php"><i class="app-menu__icon fa fa-bar-chart"></i><span
                    class="app-menu__label">Statistik Data</span></a>
        </li>
    </ul>
</aside>