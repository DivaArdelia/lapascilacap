<?php
include '../includer.php';

$menu = 'laporan2';
$page_title = 'Laporan Produk';
$page_description = 'Cetak laporan data produk';
?>
<!DOCTYPE html>
<html lang="id">

<?php include '../header.php'; ?>

<body class="app sidebar-mini rtl">
  <?php include '../navbar.php'; ?>
  <?php include '../sidebar.php'; ?>
  <main class="app-content">
    <?php include '../title.php'; ?>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">

            <?php
            $semuadata = array();
            $mulai = "-";
            $selesai = "-";
            $nama_produk = "";
            if (isset($_POST['lihat'])) {
              $mulai = $_POST['tglm'];
              $selesai = $_POST['tgls'];
              $nama_produk = $_POST['nama_produk'];
              $mulai1 = date("d-M-Y", strtotime($mulai));
              $selesai1 = date("d-M-Y", strtotime($selesai));

              // Ensure the dates are valid
              if ($mulai > $selesai) {
                echo "<script>alert('Tanggal mulai tidak boleh lebih besar dari tanggal selesai!');</script>";
              } else {
                $ambil = $koneksi->query("SELECT tb_pesanan.*, tb_barang.nama_barang, tb_detail_pesanan.jumlah_pesanan, (tb_detail_pesanan.jumlah_pesanan * tb_barang.harga_barang) AS subtotal_harga, tb_barang.harga_barang 
                                          FROM tb_pesanan 
                                          JOIN tb_detail_pesanan ON tb_pesanan.id_pesanan = tb_detail_pesanan.id_pesanan 
                                          JOIN tb_barang ON tb_detail_pesanan.id_barang = tb_barang.id_barang 
                                          WHERE tb_barang.nama_barang LIKE '%$nama_produk%' 
                                          AND tb_pesanan.tanggal_pesanan BETWEEN '$mulai' AND '$selesai'");
                while ($pecah = $ambil->fetch_assoc()) {
                  $semuadata[] = $pecah;
                }
              }
            }
            ?>

            <form method="post">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Tanggal Mulai</label>
                    <input type="date" name="tglm" class="form-control" value="<?php echo $mulai ?>">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Tanggal Selesai</label>
                    <input type="date" name="tgls" class="form-control" value="<?php echo $selesai ?>">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Nama Produk</label>
                    <select class="form-control" name="nama_produk">
                      <option value="" <?php if ($nama_produk == "") echo "selected"; ?>>---Pilihan Produk---</option>
                      <?php
                      $q_kategori = $koneksi->query("SELECT * FROM tb_kategori");
                      while ($data_kategori = $q_kategori->fetch_assoc()) {
                        echo "<optgroup label='" . $data_kategori['nama_kategori'] . "'>";
                        $q_produk = $koneksi->query("SELECT * FROM tb_barang WHERE id_kategori='" . $data_kategori['id_kategori'] . "'");
                        while ($data_produk = $q_produk->fetch_assoc()) {
                          ?>
                          <option value="<?php echo $data_produk['nama_barang']; ?>" <?php if ($nama_produk == $data_produk['nama_barang']) echo "selected"; ?>><?php echo $data_produk['nama_barang']; ?></option>
                          <?php
                        }
                        echo "</optgroup>";
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <label>&nbsp;</label><br>
                  <button class="btn btn-primary" name="lihat">Lihat</button>
                  <?php if ($semuadata != null) { ?>
                    <a class="btn btn-primary text-white" onclick="window.open('cetak_laporan_produk.php?mulai=<?php echo $mulai; ?>&selesai=<?php echo $selesai; ?>&nama_produk=<?php echo $nama_produk; ?>', 'newwindow','width=800,height=500'); 
                     return false;">Print</a>
                  <?php } ?>
                </div>
              </div>
            </form>
            <div id="laporan_transaksi">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Tanggal</th>
                    <th>Jumlah Pesanan</th>
                    <th>Harga</th>
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
                      <td><?php echo $value['tanggal_pesanan']; ?></td>
                      <td><?php echo $value['jumlah_pesanan']; ?></td>
                      <td>Rp<?php echo number_format($value['harga_barang'], 0, ',', '.'); ?></td>
                      <td>Rp<?php echo number_format($value['subtotal_harga'], 0, ',', '.'); ?></td>
                      <td><?php echo $value['status_pesanan']; ?></td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
                <tfoot>
                  <tr>
                    <?php if ($semuadata == null) { ?>
                      <th colspan="2"></th>
                      <th>Tidak Ada Data</th>
                      <th colspan="4"></th>
                    <?php } else { ?>
                      <th colspan="5">Total</th>
                      <th>Rp<?php echo number_format($total, 0, ',', '.'); ?></th>
                      <th></th>
                    <?php } ?>
                  </tr>
                  <tr></tr>
                </tfoot>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include '../footer.php'; ?>
</body>

</html>
