<?php
session_start(); // Mulai sesi PHP
include 'koneksi.php';
include 'function.php';
$menu = 'beranda';

// Simpan id_product dalam sesi jika diterima melalui POST
if (isset($_POST['id_product'])) {
    $_SESSION['id_product'] = $_POST['id_product'];
}

// Ambil id_product dari sesi
$id = isset($_SESSION['id_product']) ? $_SESSION['id_product'] : null;
?>

<!DOCTYPE html>
<html lang="id">

<?php include 'head.php' ?>
<style>
body, html {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
    background-color: #E9ECEF;
}

.jumbotron {
    flex: 1;
}
</style>
<body>

  <?php include 'navbar.php' ?>
  <div class="jumbotron">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <?php
        if (!is_null($id)) {
            // Memastikan bahwa id adalah sebuah integer
            if (filter_var($id, FILTER_VALIDATE_INT)) {
                // Membuat statement prepared
                $stmt = $koneksi->prepare("SELECT * FROM tb_barang WHERE id_barang = ?");
                if ($stmt) {
                    // Bind parameter ke placeholder
                    $stmt->bind_param("i", $id);
                    // Jalankan statement
                    $stmt->execute();
                    // Ambil hasil kueri
                    $result = $stmt->get_result();
                    // Periksa apakah ada hasil
                    if ($result && $result->num_rows > 0){
                        // Fetch data
                        $data = $result->fetch_assoc();
                        // Potong deskripsi menjadi 300 karakter
                        $short_desc = substr($data['deskripsi_barang'], 0, 300);
                        $is_long_desc = strlen($data['deskripsi_barang']) > 300;
        ?>

        <div class="row">
          <div class="col-md-6">
            <img src="assets/produk/<?php echo htmlspecialchars($data['foto_barang']); ?>" height="500px" width="500px">
          </div>
          <div class="col-md-6">
            <h3 class="font-weight-bold">
              <?php echo htmlspecialchars($data['nama_barang']); ?>
            </h3>
            <p class="text-justify display description">
              <?php echo nl2br(htmlspecialchars($short_desc)); ?>
              <?php if ($is_long_desc) { ?>
                <span class="dots">...</span>
                <span class="more-text" style="display:none;">
                  <?php echo nl2br(htmlspecialchars(substr($data['deskripsi_barang'], 300))); ?>
                </span>
              <?php } ?>
            </p>
            <?php if ($is_long_desc) { ?>
              <span class="read-more-btn" style="cursor:pointer;color:#048654;"
                onmouseover="this.style.color='#036b43';" 
                onmouseout="this.style.color='#048654';">
                Baca selengkapnya
              </span>
            <?php } ?>
            <br><br>

            <h5>
                <span style="color: #A01E2A;">
                    Rp<?php echo isset($data['harga_barang']) ? number_format($data['harga_barang'], 0, ',', '.') : ''; ?>
                </span>
            </h5><br>


            <?php if (isset($data['stok_barang']) && $data['stok_barang'] > 1) { ?>
            <h4 class="text-success">Stok Tersedia: <?php echo $data['stok_barang']; ?> barang</h4>
            <br>
            <?php } ?>
            <form role="form" id="form-tambah" action="cart.php" method="post">
              <input type="hidden" name="id_barang" value="<?php echo isset($data['id_barang']) ? $data['id_barang'] : ''; ?>">
              <div class="form-group">
                <label>Jumlah pesan</label>
                <input type="number" class="form-control" id="qty" name="jumlah_pesan" required value="1" min="1"
                  max="<?php echo isset($data['stok_barang']) ? $data['stok_barang'] : ''; ?>">
              </div>

              <?php if (isset($data['stok_barang']) && $data['stok_barang'] < 1) { ?>
                <h4 class="text-danger">Stok Habis</h4>
              <?php } 
              else { ?>
                <button type="submit" name="addcart" class="btn btn-dark btn-lg" 
                style="background-color: #048654; border-color: #048654;"
                onmouseover="this.style.backgroundColor='#036b43'; this.style.borderColor='#036b43';" 
                onmouseout="this.style.backgroundColor='#048654'; this.style.borderColor='#048654';">
                Tambah ke keranjang</button>
              <?php } ?>
            </form>
          </div>
        </div>

        <?php
                    } 
                    else {
                        echo "<p>Produk tidak ditemukan</p>";
                    }
                    // Menutup statement
                    $stmt->close();
                } 
                else {
                    echo "<p>Gagal menyiapkan statement: " . htmlspecialchars($koneksi->error) . "</p>";
                }
            } 
            else {
                echo "<p>Produk tidak valid.</p>";
            }
        } 
        else {
            echo "<p>Parameter tidak diberikan.</p>";
        }
        ?>
      </div>
    </div>
  </div>
  <?php include 'foot.php' ?>


  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const readMoreBtn = document.querySelector('.read-more-btn');
    const moreText = document.querySelector('.more-text');
    const dots = document.querySelector('.dots');

    readMoreBtn.addEventListener('click', function () {
      if (moreText.style.display === 'none') {
        moreText.style.display = 'inline';
        dots.style.display = 'none';
        readMoreBtn.textContent = 'Tutup';
      } else {
        moreText.style.display = 'none';
        dots.style.display = 'inline';
        readMoreBtn.textContent = 'Baca selengkapnya';
      }
    });
  });
</script>

</body>

</html>
