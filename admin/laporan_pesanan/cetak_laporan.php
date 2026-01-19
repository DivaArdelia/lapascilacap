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
    $mulai1   = $_GET['mulai'];
    $selesai1 = $_GET['selesai'];
    ?>

    <h2 class="text-center">Laporan Pesanan Tanggal
      <?php echo $mulai1; ?> s.d.
      <?php echo $selesai1; ?>
    </h2>
    <hr><br><br>

    <?php

    $semuadata = array();

    $ambil = $koneksi->query("SELECT * FROM tb_pesanan WHERE tanggal_pesanan BETWEEN '$mulai1' AND '$selesai1'");
    while ($pecah = $ambil->fetch_assoc()) {
      $semuadata[] = $pecah;
    }

    ?>
    <div id="laporan_transaksi">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Pemesan</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
            <th>Status</th>
          </tr>
        </thead>
        <?php $total = 0; ?>
        <?php foreach ($semuadata as $key => $value): ?>
          <?php $total += $value['total_harga_pesanan']; ?>

          <tbody>
            <tr>
              <td>
                <?php echo $key + 1; ?>
              </td>
              <td>
                <?php echo $value['nama_pesanan']; ?>
              </td>
              <td>
                <?php echo $value['tanggal_pesanan']; ?>
              </td>
              <td>Rp.
                  <?php echo number_format($value['total_harga_pesanan'], 0, ',', '.'); ?>
              </td>

              <td>
                <?php echo $value['status_pesanan']; ?>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>

        <tfoot>
          <tr>
            <?php if ($semuadata == null) { ?>
              <th colspan="2"></th>
              <th>Tidak Ada Data</th>
              <th colspan="2"></th>
            <?php } else { ?>
              <th colspan="3">Total</th>
              <th>Rp.
                  <?php echo number_format($total, 0, ',', '.'); ?>
              </th>
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
          <p> 
            <?php echo date('d-m-Y'); ?>
          </p>
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
