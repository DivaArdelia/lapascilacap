<?php
include '../includer.php';
?>
<!DOCTYPE html>
<html lang="id">

<?php include '../header.php'; ?>

<body class="app sidebar-mini rtl">
  <div class="container">
    <br><br>
    <?php
    $mulai1 = $_GET['mulai'];
    $selesai1 = $_GET['selesai'];
    $nama_produk = $_GET['nama_produk'];
    ?>

    <h2 class="text-center">Laporan Pesanan Produk "<?php echo $nama_produk; ?>" Tanggal <?php echo date("d-M-Y", strtotime($mulai1)); ?> s.d. <?php echo date("d-M-Y", strtotime($selesai1)); ?></h2>
    <hr><br><br>

    <?php

    $semuadata = array();

    $sql = "SELECT tb_pesanan.*, tb_barang.nama_barang, tb_detail_pesanan.jumlah_pesanan, (tb_detail_pesanan.jumlah_pesanan * tb_barang.harga_barang) AS subtotal_harga, tb_barang.harga_barang
            FROM tb_pesanan
            JOIN tb_detail_pesanan ON tb_pesanan.id_pesanan = tb_detail_pesanan.id_pesanan
            JOIN tb_barang ON tb_detail_pesanan.id_barang = tb_barang.id_barang
            WHERE tb_barang.nama_barang LIKE '%$nama_produk%'
            AND tb_pesanan.tanggal_pesanan BETWEEN '$mulai1' AND '$selesai1'";

    $ambil = $koneksi->query($sql);

    if (!$ambil) {
      echo "Error: " . $koneksi->error;
    } else {
      while ($pecah = $ambil->fetch_assoc()) {
        $semuadata[] = $pecah;
      }
    }

    ?>
    <div id="laporan_transaksi">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
            <th>Status</th>
          </tr>
        </thead>
        <?php $total = 0; ?>
        <?php foreach ($semuadata as $key => $value): ?>
          <?php $total += $value['subtotal_harga']; ?>
          <tbody>
            <tr>
              <td><?php echo $key + 1; ?></td>
              <td><?php echo $value['nama_barang']; ?></td>
              <td><?php echo date("d-M-Y", strtotime($value['tanggal_pesanan'])); ?></td>
              <td><?php echo $value['jumlah_pesanan']; ?></td>
              <td>Rp. <?php echo number_format($value['subtotal_harga'], 0, ',', '.'); ?></td>
              <td><?php echo $value['status_pesanan']; ?></td>
            </tr>
          <?php endforeach ?>
        </tbody>

        <tfoot>
          <tr>
            <?php if (empty($semuadata)) { ?>
              <th colspan="2"></th>
              <th>Tidak Ada Data</th>
              <th colspan="3"></th>
            <?php } else { ?>
              <th colspan="4">Total</th>
              <th>Rp. <?php echo number_format($total, 0, ',', '.'); ?></th>
              <th></th>
            <?php } ?>
          </tr>
        </tfoot>
      </table>
    </div>

    <!-- Signature Section -->
    <div class="signature-section mt-5">
      <div class="row">
        <div class="col-md-6">
          <p>Mengetahui,</p>
          <br><br><br>
          <p>__________________________</p>
          <p>(Toko Mitra Tani Klaten)</p>
          <p><?php echo date('d-m-Y'); ?></p>
        </div>
      </div>
    </div>

  </div>
  <?php include '../footer.php'; ?>
</body>

</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
  window.print();
</script>
