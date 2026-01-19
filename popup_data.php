<?php
include 'admin/includer.php';

$query = mysqli_query($koneksi, "
  SELECT * FROM tb_popups
  WHERE is_active = 1
  ORDER BY id_popup DESC
  LIMIT 1
");

$data = mysqli_fetch_assoc($query);

header('Content-Type: application/json');
echo json_encode($data);
