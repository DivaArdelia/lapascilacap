<?php
include '../includer.php';

$page_title = 'Edit Data Pegawai';
$page_description = 'Form pengubahan statistik data pegawai';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(
  mysqli_query($koneksi, "SELECT * FROM tb_statistik_pegawai WHERE id='$id'")
);
?>

<!DOCTYPE html>
<html lang="id">
<?php include '../header.php'; ?>
<body class="app sidebar-mini rtl">

<?php include '../navbar.php'; ?>
<?php include '../sidebar.php'; ?>

<main class="app-content">
<?php include '../title.php'; ?>

<div class="tile col-md-6">
<h4>Edit Statistik Pegawai</h4>

<form method="post" action="update_pegawai.php">
<input type="hidden" name="id" value="<?= $data['id'] ?>">

<div class="form-group">
  <label>Pria</label>
  <input type="number" name="pria" class="form-control" value="<?= $data['laki_laki'] ?>" required>
</div>

<div class="form-group">
  <label>Wanita</label>
  <input type="number" name="wanita" class="form-control" value="<?= $data['perempuan'] ?>" required>
</div>

<button class="btn btn-primary">Simpan</button>
<a href="index.php" class="btn btn-secondary">Kembali</a>
</form>

</div>
</main>
<?php include '../footer.php'; ?>
</body>
</html>
