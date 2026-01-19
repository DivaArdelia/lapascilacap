<?php
include 'function.php';
include 'koneksi.php';
$menu = 'status';

if (!isset($_POST['kode_pesanan'])) {
	header('location: status.php');
}
$id_pesanan = strtoupper($_POST['kode_pesanan']);

if (isset($_POST['upload_bukti'])) {
	$namaFile      = $_FILES['foto_bukti']['name'];
	$namaSementara = $_FILES['foto_bukti']['tmp_name'];

	// tentukan lokasi file akan dipindahkan
	$dirUpload = "assets/bukti_transaksi/";

	$query_check = mysqli_query($koneksi, "SELECT * FROM tb_bukti WHERE id_pesanan = '$id_pesanan'");
	$data_check  = mysqli_fetch_array($query_check);

	if ($data_check != null) {
		// Menghapus file bukti yang lama
		unlink($dirUpload . $data_check['foto_bukti']);
	}

	$uniqueName    = generateUniqueCode();
	$new_file_name = $uniqueName . $namaFile;
	$terupload     = move_uploaded_file($namaSementara, $dirUpload . $new_file_name);

	if ($terupload) {
		if ($data_check != null) {
			$query = "UPDATE tb_bukti SET foto_bukti='$new_file_name' WHERE id_pesanan='$id_pesanan'";
		} else {
			$query = "INSERT INTO tb_bukti(id_pesanan, foto_bukti) VALUES('$id_pesanan','$new_file_name')";
		}
		mysqli_query($koneksi, $query) or die("Gagal Perintah SQL" . mysqli_error($koneksi));
		echo '<script>alert("Sukses unggah bukti pembayaran!")</script>';
	} else {
		echo '<script>alert("Gagal unggah bukti pembayaran!")</script>';
	}
}
?>
<!DOCTYPE html>
<html lang="id">

<?php include 'head.php'; ?>
<style>
    body, html {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
    }

    .container {
        flex: 1;
    }
	
    footer {
        text-align: center;
        padding: 10px;
        background-color: #f1f1f1;
    }
    /* Modal Styles */
    .modal img {
        width: 100%;
    }
</style>
<body>

	<?php include 'navbar.php'; ?>

	<br><br><br><br>

	<div class="container">

		<?php
		$query = mysqli_query($koneksi, "SELECT * FROM tb_pesanan WHERE id_pesanan = '$id_pesanan'");
		$data  = mysqli_fetch_array($query);
		?>
		<a href="status.php">< Kembali</a>
		<h1 class="display-5">Status Pesanan</h1>
		<?php if ($data == null) { ?>
			<div class="empty-cart">
				<img src="assets/img/not_found.png" class="img-fluid" alt="Empty Cart" width="280" height="230" loading="lazy">
				<div>
					<label for="exampleInputEmail1"><b>Pesanan dengan kode pesanan: <span style="color: #C52F3E;"><?= $id_pesanan ?></span> tidak ditemukan!</b></label>
				</div>
				<div>
					<a href="status.php" class="btn btn-danger btn-lg">Kembali</a>
				</div>
			</div>


		<?php } else { ?>
			Silahkan cetak halaman <a href="" onclick="window.open('cetak_struk.php?id=<?php echo $id_pesanan; ?>', 'newwindow', 'width=800,height=500'); return false;">Klik Disini</a> untuk mengingat detail pemesanan Anda.
			<hr>
			<p>Berikut adalah detail status pesanan Anda. Untuk konfirmasi/pembatalan pesanan silakan 
				hubungi nomor pada link berikut: <a href="https://wa.me/6281390398883">hubungi</a></p>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label"><b>Status Pesanan</b></label>
				<div class="col-sm-10">
					<b><?= $data['jenis_pembayaran'] == "COD" && $data['status_pesanan'] == "Menunggu Pembayaran" ? "Menunggu Konfirmasi" : $data['status_pesanan']; ?></b>
				</div>
			</div>
			<hr>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label"><b>Tanggal Pemesanan</b></label>
				<div class="col-sm-10">
					<b><?php echo $data['tanggal_pesanan']; ?></b>
				</div>
			</div>
			<hr>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label"><b>Kode Pesanan</b></label>
				<div class="col-sm-10">
					<b><?php echo $data['id_pesanan']; ?></b>
				</div>
			</div>
			<hr>
			<div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label"><b>Daftar Produk Pesanan</b></label>
              <div class="col-sm-10">
                <table class="table table-bordered table-hover">
                  <thead class="thead-light">
                    <tr>
                      <th class="text-center">Produk</th>
                      <th class="text-center">Harga</th>
                      <th class="text-center">Jumlah Pesanan</th>
                      <th class="text-center">Subtotal</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $query_keranjang = mysqli_query($koneksi, "SELECT * FROM tb_detail_pesanan LEFT JOIN tb_barang ON tb_barang.id_barang = tb_detail_pesanan.id_barang WHERE id_pesanan = '$id_pesanan' ORDER BY id_detail DESC");
                  $total_harga = 0;
                  while ($keranjang = mysqli_fetch_array($query_keranjang)) { 
                    $subtotal = $keranjang['harga_barang'] * $keranjang['jumlah_pesanan'];
                    $total_harga += $subtotal;
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $keranjang['nama_barang']; ?></td>
                      <td class="text-center">Rp<?php echo number_format($keranjang['harga_barang'], 0, '.', '.'); ?></td>
                      <td class="text-center"><?php echo $keranjang['jumlah_pesanan']; ?></td>
                      <td class="text-center">Rp<?php echo number_format($subtotal, 0, '.', '.'); ?></td>
                    </tr>
                  <?php } ?>
                  <?php
                  $ongkos_kirim  = $total_harga > 100000 ? 0 : 50000;
                  $total_pembayaran = $total_harga + $ongkos_kirim;
                  ?>
                  <tr>
                    <td colspan="3" class="text-right"><b>Total Harga</b></td>
                    <td class="text-center">Rp<?php echo number_format($total_harga, 0, '.', '.'); ?></td>
                  </tr>
                  <tr>
                    <td colspan="3" class="text-right"><b>Ongkos Kirim</b></td>
                    <td class="text-center">Rp<?php echo number_format($ongkos_kirim, 0, '.', '.'); ?></td>
                  </tr>
                  <tr>
                    <td colspan="3" class="text-right"><b>Total Pembayaran</b></td>
                    <td class="text-center">Rp<?php echo number_format($total_pembayaran, 0, '.', '.'); ?></td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <hr>
			<?php if ($data['jenis_pembayaran'] == 'COD') { ?>
				<h5 class="text-info">Pembayaran dilakukan secara COD (Cash On Delivery)</h5>
			<?php } else { ?>
				<div class="media border p-3">
					<img src="assets/img/logo-bri.jpg" alt="NoRek. Mitra Tani Klaten BRI" class="mr-3 mt-3 rounded-circle" width="150px" height="100px">
					<div class="media-body">
						<h4>BRI</h4>
						<h5><b>389101009905500 </b> - ETTY KUSUMA</h5>
						<h5>Mitra tani klaten</h5>
					</div>
				</div>
				<br>
				Cantumkan Kode Pesanan : <b><?php echo $data['id_pesanan']; ?></b> Pada Berita Transfer/Catatan Transfer
				<hr>
				<div class="form-group">
					<label for="exampleInputEmail1"><b>Unggah Bukti Pembayaran</b></label>
					<?php
					$query_bukti = mysqli_query($koneksi, "SELECT * FROM tb_bukti WHERE id_pesanan = '$id_pesanan'");
					$bukti       = mysqli_fetch_array($query_bukti);
					if ($bukti == null) {
						?>
						<form method="POST" enctype="multipart/form-data">
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-2 col-form-label">Unggah Bukti</label>
								<div class="col-sm-10">
									<input type="hidden" name="kode_pesanan" value="<?php echo $data['id_pesanan']; ?>">
									<input type="file" accept="image/png, image/jpeg, image/jpg" id="gambar" name="foto_bukti" required>
								</div>
							</div>
							<button type="submit" class="btn btn-primary" name="upload_bukti">Unggah</button>
						</form>
					<?php } else { ?>
						<div class="text-center">
							<img src="assets/bukti_transaksi/<?php echo $bukti['foto_bukti']; ?>" alt="Bukti Pembayaran" width="300px" height="300px" id="buktiPembayaran">
						</div>
						<?php if ($data['status_pesanan'] == 'Menunggu Pembayaran') { ?>
							<form method="POST" enctype="multipart/form-data" class="mt-3">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Ganti Bukti</label>
									<div class="col-sm-10">
										<input type="hidden" name="kode_pesanan" value="<?php echo $data['id_pesanan']; ?>">
										<input type="file" accept="image/png, image/jpeg, image/jpg" id="gambar" name="foto_bukti" required>
									</div>
								</div>
								<button type="submit" class="btn btn-warning" name="upload_bukti">Ganti Bukti</button>
							</form>
							<h5 class="text-warning mt-3">Bukti pembayaran menunggu verifikasi dari Admin.</h5>
						<?php } else if ($data['status_pesanan'] != 'Menunggu Pembayaran') { ?>
							<h5 class="text-success mt-3">Bukti pembayaran telah dikonfirmasi</h5>
						<?php } ?>
					<?php } ?>
				</div>
			<?php } ?>
		<?php } ?>
		<br><br><br><br>
	</div>

	<?php include 'foot.php'; ?>
    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Bukti Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="Bukti Pembayaran">
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('buktiPembayaran').onclick = function() {
            var src = this.src;
            document.getElementById('modalImage').src = src;
            $('#imageModal').modal('show');
        }
    </script>
</body>
</html>
