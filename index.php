<?php
include 'koneksi.php';
include 'function.php';
$menu = 'beranda';
?>

<!DOCTYPE html>
<html lang="id">
<?php include 'head.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<body class="body">
  <?php include 'navbar.php'; ?>

  <div id="popup-overlay" class="popup-overlay">
  <div class="popup-modal popup-animate">

    <!-- CLOSE -->
    <button class="popup-close" onclick="closePopup()">×</button>

    <!-- KIRI -->
    <div class="popup-left">
      <img src="assets/img/logouptpas.png" class="popup-logo" alt="Logo">
      <div class="popup-divider"></div>
      <h2 id="popup-judul"></h2>
    </div>

    <!-- KANAN -->
    <div class="popup-right">
      <img id="popup-image" src="" alt="Pamflet">
    </div>

  </div>
  </div>

  <!-- POPUP MODAL 
  <div id="popup-overlay" class="popup-overlay">
      <div class="popup-box">
        <button class="popup-close" onclick="closePopup()">×</button>
        <img id="popup-image" src="" alt="Popup">
      </div>
  </div> -->

  <div class="container-custom">

    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/pict1.jpg" alt="Mitra Tani Klaten 1" class="d-block w-100" style="height: 500px; object-fit: cover;">
          <div class="carousel-caption" >
            <h1><b>Lapas Kelas IIB Cilacap sebagai sahabat terbaik warga binaan yang memberikan produk terbaik</b></h1>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/pict1.jpg" alt="Mitra Tani Klaten 2" class="d-block w-100" style="height: 500px; object-fit: cover;">
          <div class="carousel-caption">
            <h1><b>Tingkatkan hasil produk anda bersama bibit-bibit unggul dari Lapas Kelas IIB Cilacap</b></h1>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    <!-- BERITA BERJALAN -->
    <div class="news-ticker">
      <div class="news-label">Informasi</div>
      <div class="news-content">
          <div class="news-text">
            <span>Kunjungan Tatap Muka Lapas Kelas IIB Cilacap Setiap Hari Senin s/d Kamis pkl. 08.30 - 11.00 WIB sesuai Jadwal</span>
            <!--<span>Kegiatan Pembinaan Warga Binaan Lapas Kelas IIB Cilacap</span>
            <span>Peningkatan Layanan Pemasyarakatan Berbasis Digital</span>-->

            <!-- DUPLIKAT agar loop mulus -->
            <span>Kunjungan Tatap Muka Lapas Kelas IIB Cilacap Setiap Hari Senin s/d Kamis pkl. 08.30 - 11.00 WIB sesuai Jadwal</span>
            <!--<span>Kegiatan Pembinaan Warga Binaan Lapas Kelas IIB Cilacap</span>
            <span>Peningkatan Layanan Pemasyarakatan Berbasis Digital</span>-->
          </div>
      </div>
      </div>
    </div>

    <br>
    

    <div class="row">
        <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="form-group">
              <label for="exampleInputEmail1">Pilih kategori</label>
              <select class="form-control" id="kategori">
                <option value="show-all" selected="selected">---Pilihan kategori---</option>
                <?php
                $q_kategori = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
                while ($data_kat = mysqli_fetch_array($q_kategori)) {
                  ?>
                  <option value="<?php echo $data_kat['id_kategori']; ?>"><?php echo $data_kat['nama_kategori']; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="search-input">Cari Produk</label>
              <div class="input-group">
                <input type="text" class="form-control" id="search-input" placeholder="Cari produk...">
              <!-- <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button">Cari</button>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

    <div id="data-product"></div>

    <br>
    <div class="container-fluid">
        <div class="col-md-4">
          <h6 class="display-5 text-left">Berita</h6>
        </div>
    </div>
    <br>
    <br>

    <div class="statistik-wrapper">
      <!-- DATA PENGHUNI -->
      <div class="statistik-item">
        <div class="info-card">
          <div class="info-header">
            <h3>DATA PENGHUNI</h3>
          </div>
          <?php
            include 'koneksi.php';

            $q = mysqli_query($koneksi, "SELECT * FROM tb_statistik_penghuni ORDER BY id DESC LIMIT 1");
            $data = mysqli_fetch_assoc($q);

            $kapasitas = $data['kapasitas'];
            $isi       = $data['isi_penghuni'];
            $residivis = $data['residivis'];
            $non_residivis = $isi - $residivis;
          ?>

          <div class="info-content horizontal-center">
            <div class="info-left">
              <div class="detail kapasitas">
                  <span>Kapasitas</span>
                  <strong><?= $kapasitas ?> orang</strong>
              </div>

              <div class="detail isi">
                  <span>Isi</span>
                  <strong><?= $isi ?> orang</strong>
              </div>

              <div class="detail residivis">
                  <span>Residivis</span>
                  <strong><?= $residivis ?> orang</strong>
              </div>
            </div>
            <!-- DIAGRAM -->
            <div class="info-right">
              <div class="chart-wrapper">
                  <canvas id="diagramLingkaran"></canvas>
                  <div class="chart-center">
                      <h5>Total</h5>
                      <h3><?= $isi ?></h3>
                      <span>Orang</span>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- STATISTIK PEGAWAI -->
      <div class="statistik-item">
        <div class="info-card">
          <div class="info-header">
            <h3>DATA PEGAWAI</h3>
          </div>
          <?php
            $q2 = mysqli_query($koneksi, "SELECT * FROM tb_statistik_pegawai ORDER BY id DESC LIMIT 1");
            $pegawai = mysqli_fetch_assoc($q2);

            $pria   = $pegawai['laki_laki'];
            $wanita = $pegawai['perempuan'];
            $total  = $pria + $wanita;
          ?>

          <div class="info-content horizontal-center">
            <div class="info-left">
              <div class="detail pria">
                <span>Pegawai Pria</span>
                <strong><?= $pria ?> orang</strong>
              </div>

              <div class="detail wanita">
                <span>Pegawai Wanita</span>
                <strong><?= $wanita ?> orang</strong>
              </div>

              <div class="detail total">
                <span>Total Pegawai</span>
                <strong><?= $total ?> orang</strong>
              </div>
            </div>
            <div class="info-right" style="width: 320px;">
              <canvas id="diagramBatangPegawai"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-maps">
    <h3 class="display-5 text-center-maps"></h3>
    <!--<div class="map-responsive" style="width: 100%; height: 400px; overflow: hidden;">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.588870228673!2d109.00750507319354!3d-7.727181676571778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65128ffb1158f9%3A0xee8e7291932e5035!2sLapas%20Kelas%20IIB%20Cilacap!5e0!3m2!1sid!2sid!4v1765422212037!5m2!1sid!2sid" 
        width="40%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
      </iframe>
    </div>-->
  </div>

  <!-- JavaScript files -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- JavaScript to load products dynamically -->
  <script type="text/javascript">
    $(document).ready(function () {
      
      function loadProducts() {
        var action = $('#kategori').val();
        var searchQuery = $('#search-input').val();
        
        if (searchQuery.trim() === "") {
          searchQuery = null; // If search input is empty, set searchQuery to null
        }

        $.ajax({
          url: 'data_product.php', 
          type: 'GET',
          data: { action: action, search: searchQuery },
          success: function(response) {
            $('#data-product').html(response);

            // Initialize carousel for products
            $('.product-carousel').carousel({
              interval: false
            });
          }
        });
      }

      // Load all products on initial load
      loadProducts();

      // Handle category change
      $('#kategori').change(function() {
        loadProducts();
      });

      // Handle search input
      $('#search-input').on('input', function() {
        loadProducts();
      });
    });
  </script>

  <?php include 'foot.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('diagramLingkaran').getContext('2d');

new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ['Residivis', 'Non Residivis'],
    datasets: [{
      data: [<?= $residivis ?>, <?= $non_residivis ?>],
      backgroundColor: ['#fd7e14', '#0d6efd'],
      borderWidth: 0
    }]
  },
  options: {
    cutout: '70%',
    plugins: {
      legend: {
        position: 'bottom',
        labels: {
          boxWidth: 14
        }
      }
    }
  }
});

new Chart(document.getElementById('diagramBatangPegawai'), {
  type: 'bar',
  data: {
    labels: ['Pria', 'Wanita'],
    datasets: [{
      label: 'Jumlah Pegawai',
      data: [<?= $pria ?>, <?= $wanita ?>],
      backgroundColor: ['#0d6efd', '#e83e8c'],
      borderRadius: 8
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { display: false }
    },
    scales: {
      y: {
        beginAtZero: true,
        ticks: {
          stepSize: 1
        },
        title: {
          display: true,
          text: 'Jumlah Orang'
        }
      }
    }
  }
});

</script>

<!-- JavaScript popup -->
<script>
document.addEventListener("DOMContentLoaded", function () {

  if (!sessionStorage.getItem('popup_shown')) {

    fetch('/lapascilacap/popup_data.php')
      .then(res => res.json())
      .then(data => {
        if (data && data.judul && data.gambar) {
          document.getElementById('popup-judul').innerText = data.judul;
          document.getElementById('popup-image').src =
            '/lapascilacap/uploads/' + data.gambar;

          document.getElementById('popup-overlay').style.display = 'flex';
        }
      });

  }

});

function closePopup() {
  document.getElementById('popup-overlay').style.display = 'none';
  sessionStorage.setItem('popup_shown', 'true');
}
</script>

</body>
</html>
