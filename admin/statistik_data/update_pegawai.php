<?php
include '../includer.php';

mysqli_query($koneksi, "
  UPDATE tb_statistik_pegawai SET
    laki_laki='$_POST[laki_laki]',
    perempuan='$_POST[perempuan]',
  WHERE id='$_POST[id]'
");

header("Location: index.php");

?>
