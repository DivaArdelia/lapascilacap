<?php
include 'koneksi.php';
include 'function.php';
$menu = 'tentang';
?>

<!DOCTYPE html>
<html lang="id">
<?php include 'head.php' ?>

<head>
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
  <style>
    a.no-underline {
      text-decoration: none;
    }
    a.no-underline:hover {
      text-decoration: none;
    }
  </style>
</head>

<body class="body">

  <?php include 'navbar.php' ?>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <div style="width: 100%; max-width: 100%; max-height: 300px; overflow: hidden; 
      display: flex; justify-content: center; align-items: center;">
        <img src="assets/img/toko1.jpg" alt="Mitra Tani Klaten" width="100%" height="auto">
        <div class="carousel-caption">
          <h1><b>Tentang Toko Mitra Tani</b></h1>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>

  <div class="container-custom">
    <div class="row">
      <div class="col-md-6">
        <img src="assets/img/kunjungan.jpg" alt="Toko Mitra Tani Klaten" width="100%" height="100%" style="border-radius: 10px 0 0 10px; ">
      </div>
      <div class="col-md-6">
        <div class="container" style="padding: 0 35px;">
          <br>
          <h1><b>Tentang Mitra Tani</b></h1>

          <p style="text-align: justify;">
            <b>Mitra Tani</b> adalah toko pertanian yang didirikan atas adanya kerjasama antara Pak Sigit dengan Pak Widodo 
            sebagai respon atas pandemi COVID-19 pada tahun 2020. Berawal dari keinginan untuk membantu para petani dan 
            penghobi ternak di sekitar kami, <b>Mitra Tani</b> telah menjadi mitra yang terpercaya dalam menyediakan 
            layanan pembibitan, penjualan barang pertanian, dan pakan ternak berkualitas. Dengan komitmen kami untuk 
            memberikan pelayanan terbaik dan produk berkualitas, <b>Mitra Tani</b> telah berkembang pesat dan sukses.
          </p>        

          <p style="text-align: justify;">
            <b>Mitra Tani</b>, percaya bahwa pertanian adalah tulang punggung masyarakat. Oleh karena itu, kami berkomitmen 
            untuk terus memberikan dukungan, layanan, dan produk terbaik bagi para petani dan pecinta ternak di seluruh Indonesia.
          </p>

          <p style="text-align: justify;">
            Kelebihan kami bisa konsultasi secara langsung karena kami memiliki latar belakang yang mumpuni dan 
            berpengalaman di bidang pertanian. Barang yang kami jual juga bisa diantar sampai ke lokasi pelanggan yang 
            telah memesan melalui offline ataupun online. Mari bergabung dengan <b>Mitra Tani</b> dan menjadi 
            bagian dari pertanian yang lebih baik untuk masa depan yang lebih baik!
          </p>

          <br>
          <a href="index.php" class="btn btn-dark btn-lg" 
          style="background-color: #048654; border-color: #048654;"
          onmouseover="this.style.backgroundColor='#036b43'; this.style.borderColor='#036b43';" 
          onmouseout="this.style.backgroundColor='#048654'; this.style.borderColor='#048654';">
          Lihat Produk</a>
          <br><br>
        </div>
      </div>
    </div>
  </div>
  
  <div class="struktur-organisasi">
    <h1><b>Struktur Organisasi</b></h1>
    <img src="assets/img/struktur_organisasi.png" alt="Struktur Organisasi">
  </div>

  <br>
<br>
  <div class="container">
  <div class="row">

    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title" style="font-weight: bold; font-size: 1.5rem;">Pupuk Terbaik</h5>
          <p class="card-text">Berikan perawatan terbaik untuk tanaman dengan pupuk premium dari kami! Formula lengkap 
            dan seimbang yang dirancang khusus untuk memenuhi semua kebutuhan nutrisi tanaman, memastikan pertumbuhan 
            optimal dan hasil panen maksimal. Pupuk kami tidak hanya memperkuat akar, tetapi juga meningkatkan kualitas 
            tanah secara keseluruhan. Dapatkan hasil pertanian yang lebih sehat dan produktif dari pupuk 
            terbaik dari kami.</p>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
        <h5 class="card-title" style="font-weight: bold; font-size: 1.5rem;">Bibit Berkualitas</h5>
          <p class="card-text">Tanam harapan dan masa depan dengan bibit berkualitas terbaik dari kami! Bibit unggul pilihan yang telah melewati seleksi ketat, memastikan pertumbuhan cepat dan hasil panen melimpah. Apapun jenis tanaman yang Anda inginkan, kami menyediakan bibit yang siap tumbuh subur di berbagai kondisi tanah. Percayakan kebutuhan pertanian Anda pada kami, dan nikmati hasil bumi yang sehat dan berkualitas tinggi.</p>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
        <h5 class="card-title" style="font-weight: bold; font-size: 1.5rem;">Perkakas Tahan Lama</h5>
          <p class="card-text">Permudah setiap pekerjaan Anda dengan perkakas tahan lama dan berkualitas tinggi dari kami! Dirancang dengan teknologi terbaru dan bahan pilihan, perkakas kami menjamin keawetan dan kekuatan yang luar biasa. Apapun proyek yang Anda kerjakan, perkakas kami siap mendukung Anda dalam setiap langkah. Investasikan pada alat yang tahan lama dan nikmati efisiensi serta kenyamanan dalam setiap pekerjaan Anda.</p>
        </div>
      </div>
    </div>

  </div>
</div>


<br>
  <br>

  <div class="container-custom2">
    <div class="container about-us">

      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="card-body">
              <h4>Alamat/Kontak</h4>
              
              <p class="card-text">
                <i class='bx bx-map'></i> 
                <a href="https://maps.app.goo.gl/uSo3wH9faLh6NTSc8" class="no-underline" style= "color:#4A4A4A"
                  onmouseover="this.style.color='#036b43';" 
                  onmouseout="this.style.color='#4A4A4A';"> 
                  Jl. Desa Wonoboyo 2, Cucukan, Wonoboyo, Kec. Jogonalan, Kabupaten Klaten, Jawa Tengah 57452 </a>
              </p>
                <p> 
                  <i class='bx bxs-phone-call'></i> Call/SMS/Whatsapp : 
                  <a href="https://wa.me/6281390398883" class="no-underline" style= "color:#4A4A4A"
                  onmouseover="this.style.color='#036b43';" 
                  onmouseout="this.style.color='#4A4A4A';">081390398883</a>
                </p>
                  <i class='bx bx-time'></i> Buka Senin s/d Sabtu <br> Pukul: 07.00 - 16.00 WIB (Minggu Libur)</p>  
                <p>
                  <i class='bx bxs-envelope'></i> mitratani2021@gmail.com
                </p>   
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="row">
            <div class="card-body">
              <h4>Media Sosial</h4>
              <p class="card-text">

              <p><i class='bx bxl-instagram social-icon'></i> <a href="https://instagram.com/tokopertanianmitratanii" 
              class="social-icon no-underline" style= "color:#4A4A4A"
                  onmouseover="this.style.color='#036b43';" 
                  onmouseout="this.style.color='#4A4A4A';">tokopertanianmitratanii</a></p>

              <!-- <p><i class='bx bxl-youtube social-icon'></i> <a href="#" class="social-icon" 
              style="text-decoration: none; color:black;">(Segera Menyusul)</a></p>

              <p><i class='bx bxl-facebook social-icon'></i> <a href="#" class="social-icon" 
              style="text-decoration: none; color:black;">(Segera Menyusul)</a></p> -->
              </div>
          </div>

        <div class="col-md-6">
            <div class="card-body" style="margin-top: -14px">
              <h4>Layanan</h4>
              <p>Pembibitan <br>
              Perkakas <br>
              Pakan Ternak</p>
              </div>
          </div>
          </div>

        </div>

      </div>
    </div>
  </div>

  <?php include 'foot.php' ?>

</body>
</html>
