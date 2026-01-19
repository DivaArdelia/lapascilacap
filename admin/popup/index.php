<?php
include '../includer.php';

$menu = 'popup';
$page_title = 'Popup';
$page_description = 'Manajemen Popups';


?>

<!DOCTYPE html>
<html lang="id">
<html lang="id">
<?php include '../header.php'; ?>
<body class="app sidebar-mini rtl">

<?php include '../navbar.php'; ?>
<?php include '../sidebar.php'; ?>

<main class="app-content">
<?php include '../title.php'; ?>

<head>
<meta charset="UTF-8">
<title>Manajemen Popup</title>
<style>

.container {
  max-width: 1000px;
  margin: auto;
  background: #fff;
  padding: 20px;
  border-radius: 12px;
}
h2 {
  margin-bottom: 20px;
}
table {
  width: 100%;
  border-collapse: collapse;
}
th, td {
  padding: 12px;
  border-bottom: 1px solid #ddd;
  text-align: center;
}
th {
  background: #1f2d3d;
  color: #fff;
}
img {
  max-width: 120px;
  border-radius: 8px;
}
.badge {
  padding: 6px 12px;
  border-radius: 20px;
  font-size: 12px;
}
.active {
  background: #28a745;
  color: #fff;
}
.inactive {
  background: #dc3545;
  color: #fff;
}
.btn {
  padding: 6px 12px;
  border-radius: 6px;
  color: #fff;
  text-decoration: none;
  font-size: 13px;
}
.btn-primary { background: #007bff; }
.btn-danger { background: #dc3545; }
.btn-success { background: #28a745; }

.upload-box {
  margin-bottom: 30px;
  padding: 15px;
  border: 2px dashed #ccc;
  border-radius: 10px;
}
</style>
</head>

<body>
<div class="container">

<h2>Manajemen Popup Pamflet</h2>

<!-- FORM UPLOAD -->
<div class="upload-box">
<form action="upload.php" method="POST" enctype="multipart/form-data">
  <input type="text" name="judul" placeholder="Judul Popup" required>
  <input type="file" name="gambar" required>
  <button class="btn btn-primary">Upload Popup</button>
</form>
</div>

<!-- TABEL DATA -->
<table>
<tr>
  <th>No</th>
  <th>Judul</th>
  <th>Preview</th>
  <th>Status</th>
  <th>Aksi</th>
</tr>

<?php 
$popup = mysqli_query($koneksi, "SELECT * FROM tb_popups ORDER BY id_popup DESC");
$no = 1; while($row = mysqli_fetch_assoc($popup)): ?>

<tr>
  <td><?= $no++ ?></td>
  <td><?= $row['judul'] ?></td>
  <td>
    <img src="../../uploads/<?= $row['gambar'] ?>">
  </td>
  <td>
    <span class="badge <?= $row['is_active'] ? 'active' : 'inactive' ?>">
      <?= $row['is_active'] ? 'Aktif' : 'Nonaktif' ?>
    </span>
  </td>
  <td>
    <?php if(!$row['is_active']): ?>
      <a href="set_active.php?id=<?= $row['id_popup'] ?>" class="btn btn-success">Aktifkan</a>
    <?php endif; ?>
    <a href="delete.php?id=<?= $row['id_popup'] ?>" class="btn btn-danger"
       onclick="return confirm('Hapus popup ini?')">Hapus</a>
  </td>
</tr>
<?php endwhile; ?>

</table>

</div>

<?php include '../footer.php'; ?>
</body>
</html>
