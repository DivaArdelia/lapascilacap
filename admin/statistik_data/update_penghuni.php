<?php
include '../includer.php';

mysqli_query($koneksi, "
  UPDATE tb_statistik_penghuni SET
    kapasitas='$_POST[kapasitas]',
    isi_penghuni='$_POST[isi]',
    residivis='$_POST[residivis]'
  WHERE id='$_POST[id]'
");

header("Location: index.php");

?>
