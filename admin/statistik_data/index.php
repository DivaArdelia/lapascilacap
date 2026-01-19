<?php
include '../includer.php';

$menu = 'statistik';
$page_title = 'Statistik';
$page_description = 'Data Penghuni dan Kepegawaian';

$penghuni = mysqli_fetch_assoc(
  mysqli_query($koneksi, "SELECT * FROM tb_statistik_penghuni ORDER BY id DESC LIMIT 1")
);

$pegawai = mysqli_fetch_assoc(
  mysqli_query($koneksi, "SELECT * FROM tb_statistik_pegawai ORDER BY id DESC LIMIT 1")
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

<div class="row">

<!-- DATA PENGHUNI -->
<div class="col-md-6">
  <div class="tile">
    <h4>Statistik Penghuni</h4>
    <table class="table table-bordered">
      <tr><th>Kapasitas</th><td><?= $penghuni['kapasitas'] ?></td></tr>
      <tr><th>Isi</th><td><?= $penghuni['isi_penghuni'] ?></td></tr>
      <tr><th>Residivis</th><td><?= $penghuni['residivis'] ?></td></tr>
    </table>
    <a href="edit_penghuni.php?id=<?= $penghuni['id'] ?>" class="btn btn-warning btn-sm">
      Edit Data Penghuni
    </a>
  </div>
</div>

<!-- DATA PEGAWAI -->
<div class="col-md-6">
  <div class="tile">
    <h4>Statistik Pegawai</h4>
    <table class="table table-bordered">
      <tr><th>Pria</th><td><?= $pegawai['laki_laki'] ?></td></tr>
      <tr><th>Wanita</th><td><?= $pegawai['perempuan'] ?></td></tr>
    </table>
    <a href="edit_pegawai.php?id=<?= $pegawai['id'] ?>" class="btn btn-warning btn-sm">
      Edit Data Pegawai
    </a>
  </div>
</div>

</div>
</main>

<?php include '../footer.php'; ?>
</body>
</html>
