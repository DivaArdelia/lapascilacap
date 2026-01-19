<?php
include '../includer.php';

// cegah akses langsung
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  header("Location: index.php");
  exit;
}

// validasi input
if (!isset($_POST['judul']) || !isset($_FILES['gambar'])) {
  die("Data tidak lengkap");
}

$judul = $_POST['judul'];

// folder upload
$upload_dir = "../../uploads/";
if (!is_dir($upload_dir)) {
  mkdir($upload_dir, 0777, true);
}

// file
$nama_file = $_FILES['gambar']['name'];
$tmp_file  = $_FILES['gambar']['tmp_name'];

if ($nama_file == '') {
  die("File kosong");
}

// ekstensi
$ext = strtolower(pathinfo($nama_file, PATHINFO_EXTENSION));
$allow = ['jpg','jpeg','png','webp'];

if (!in_array($ext, $allow)) {
  die("Format file tidak didukung");
}

$nama_baru = time() . '_' . rand(100,999) . '.' . $ext;

// upload file
move_uploaded_file($tmp_file, $upload_dir . $nama_baru);

// nonaktifkan popup lama
mysqli_query($koneksi, "UPDATE tb_popups SET is_active='0'");

// simpan popup baru
mysqli_query($koneksi, "
  INSERT INTO tb_popups SET
    judul='$judul',
    gambar='$nama_baru',
    is_active='1'
");

// redirect
header("Location: index.php");
exit;
