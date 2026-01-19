<?php
include '../includer.php';

$page_title = 'Edit Data Penghuni';
$page_description = 'Form pengubahan statistik data penghuni';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(
  mysqli_query($koneksi, "SELECT * FROM tb_statistik_penghuni WHERE id='$id'")
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
<h4>Edit Statistik Penghuni</h4>

<form method="post" action="update_penghuni.php">
<input type="hidden" name="id" value="<?= $data['id'] ?>">

<div class="form-group">
  <label>Kapasitas</label>
  <input type="number" name="kapasitas" class="form-control" value="<?= $data['kapasitas'] ?>" required>
</div>

<div class="form-group">
  <label>Isi Penghuni</label>
  <input type="number" name="isi" class="form-control" value="<?= $data['isi_penghuni'] ?>" required>
</div>

<div class="form-group">
  <label>Residivis</label>
  <input type="number" name="residivis" class="form-control" value="<?= $data['residivis'] ?>" required>
</div>

<button class="btn btn-primary">Simpan</button>
<a href="index.php" class="btn btn-secondary">Kembali</a>
</form>

</div>
</main>
<?php include '../footer.php'; ?>
</body>
</html>
