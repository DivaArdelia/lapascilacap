<?php
include '../includer.php';

$id = $_GET['id_popup'];

// ambil nama file
$data = mysqli_fetch_array(
  mysqli_query($koneksi, "SELECT gambar FROM tb_popups WHERE id_popup='$id'")
);

// hapus file
if(file_exists("../../uploads/".$data['gambar'])){
  unlink("../../uploads/".$data['gambar']);
}

// hapus database
mysqli_query($koneksi, "DELETE FROM tb_popups WHERE id_popup='$id'");

header("Location: index.php");
