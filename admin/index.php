<?php

include 'includer.php';

$menu             = 'dashboard';
$page_title       = 'Dasbor';
$page_description = 'Beranda';
$kategori         = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM tb_kategori"));
$barang           = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM tb_barang"));
$pesanan          = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM tb_pesanan"));

?>

<!DOCTYPE html>
<html lang="id">

<?php include 'header.php'; ?>

<body class="app sidebar-mini rtl">
  <?php include 'navbar.php'; ?>
  <?php include 'sidebar.php'; ?>

  <main class="app-content">
    <?php include 'title.php'; ?>

    <div class="row">
      <div class="col-md-6 col-lg-3">
        <a href="kategori/index.php">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-list-alt fa-3x"></i>
            <div class="info">
              <h4>Kategori</h4>
              <p><b>
                  <?= $kategori['total']; ?>
                </b></p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-3">
        <a href="produk/index.php">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-desktop fa-3x"></i>
            <div class="info">
              <h4>Produk</h4>
              <p><b>
                  <?= $barang['total']; ?>
                </b></p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-3">
        <a href="pejabat_struktural/index.php">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-desktop fa-3x"></i>
            <div class="info">
              <h4>Pejabat Struktural</h4>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-3">
        <a href="pesanan/index.php">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-money fa-3x"></i>
            <div class="info">
              <h4>Berita</h4>
              <p><b>
                  <?= $pesanan['total']; ?>
                </b></p>
            </div>
          </div>
        </a>
      </div>

      <div class="menu-card">
        <div class="menu-header">
          <div class="menu-icon">
            <i class="fa fa-users"></i>
          </div>
          <h4>Pejabat Struktural</h4>
        </div>

        <div class="submenu-wrapper">
            <a href="pejabat/kepala.php" class="submenu-card">
              <i class="fa fa-user-tie"></i>
              <span>Kepala</span>
            </a>

            <a href="pejabat/eselon_iv.php" class="submenu-card">
              <i class="fa fa-users"></i>
              <span>Eselon IV</span>
            </a>

            <a href="pejabat/eselon_v.php" class="submenu-card">
              <i class="fa fa-users"></i>
              <span>Eselon V</span>
            </a>
        </div>
      </div>
    </div>
    <!--<div class="carousel-inner">
      <div class="carousel-item active">
        <div
          style="width: 100%;max-width: 100%;max-height: 300px;overflow: hidden; display: flex; justify-content: center; align-items: center;">
          <img src="../assets/img/pict1.jpg" width="100%" height="auto" alt="Edot Gypsum">
          <div class="carousel-caption">
            <h1><b>Lembaga Pemasyarakatan Kelas IIB Cilacap</b></h1>
          </div>
        </div>
      </div>
    </div>-->
  </main>

  <?php include 'footer.php'; ?>
</body>

</html>
