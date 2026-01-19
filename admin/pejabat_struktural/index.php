<?php
include '../includer.php';

$menu = 'pejabat struktural';
$page_title = 'Pejabat';
$page_description = 'Data Pejabat Struktural';

?>

<!DOCTYPE html>
<html lang="id">
<?php include '../header.php'; ?>
<head>
    <link rel="stylesheet" href="pejabat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="app sidebar-mini rtl">

<?php include '../navbar.php'; ?>
<?php include '../sidebar.php'; ?>

<main class="app-content">
<?php include '../title.php'; ?>

<div class="row">

<div class="menu-card">
    <div class="menu-header">
        <div class="menu-icon">
            <i class="fa fa-desktop"></i>
        </div>
        <h3>Pejabat Struktural</h3>
    </div>

    <div class="submenu-wrapper">
        <a href="pejabat/kepala.php" class="submenu-card">
            <i class="fa fa-user-tie"></i>
            <span>Kepala</span>
        </a>

        <a href="pejabat/eselon_iv.php" class="submenu-card">
            <i class="fa fa-users"></i>
            <span>Eselon IV</span>
        </a>

        <a href="pejabat/eselon_v.php" class="submenu-card">
            <i class="fa fa-user"></i>
            <span>Eselon V</span>
        </a>
    </div>
</div>

</div>
</main>

<?php include '../footer.php'; ?>
</body>
</html>
