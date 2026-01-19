<?php
include '../includer.php';

$id = $_GET['id_popup'];

// nonaktifkan semua
mysqli_query($koneksi, "UPDATE tb_popups SET is_active='0'");

// aktifkan yang dipilih
mysqli_query($koneksi, "UPDATE tb_popups SET is_active='1' WHERE id_popup='$id'");

header("Location: index.php");
