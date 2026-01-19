<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Tambahkan link untuk Boxicons di bagian head -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #eaeae1;">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>">
            <img src="assets/img/logouptpas.png" alt="Lembaga Pemasyarakatan Kelas IIB Cilacap" style="height: 45px">
            <!-- <img src="assets/img/logo_imipas.png" alt="Mitra Tani Klaten" style="height: 45px;"> -->
            <div class ="brand-text">
                <div class="brand-title"><strong>LEMBAGA PEMASYARAKATAN</strong></div>
                <div class="brand-subtitle"><strong>KELAS IIB CILACAP</strong></div>
             </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?= $menu == 'beranda' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php">Beranda</a>
                </li>
                <li class="nav-item dropdown <?= $menu == 'profile' ? 'active' : ''; ?>">
                    <a class="nav-link dropdown-toggle" href="#" role="button">Profile</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="profile_pejabat.php">
                                Profile Pejabat
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="struktur_organisasi.php">
                                Struktur Organisasi
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="struktur_organisasi.php">
                                Visi, Misi, dan Tujuan
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown <?= $menu == 'publikasi' ? 'active' : ''; ?>">
                    <a class="nav-link dropdown-toggle" href="#" role="button">Publikasi</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="https://drive.google.com/drive/folders/1Tmr4sZDvmm__vEUaFW1gmsC5DlLkCfYF?usp=sharing">
                                Rencana Strategis
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="https://drive.google.com/drive/folders/1iEzaUKko6XqS8sWWBPFpgheBGLMLozoK?usp=sharing">
                                Perjanjian Kinerja
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="https://drive.google.com/drive/folders/1sEB34lcpxmOrFaoCfpcdjXsETULRy9GM?usp=sharing">
                                LKJLP
                            </a>
                        </li>
                     </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="status.php">C</a>
                    <!--<a class="nav-link" href="assets/pdf/Daftar_produk.pdf" download>Unduh Produk</a>-->
                </li>
                <li class="nav-item <?= $menu == 'tentang' ? 'active' : ''; ?>">
                    <a class="nav-link" href="about.php">Tentang Kami</a>
                </li>
            </ul>
            <!-- Kotak kecil warna kuning dengan ikon panah untuk menampilkan tautan "ADMIN" -->
            <div class="d-flex align-items-center" style="cursor: pointer;" onclick="toggleAdminMenu()">
                <div class="mr-2" id="admin-icon-container" style="width: 20px; height: 20px; background-color: #FFE200; display: flex; align-items: center; justify-content: center;">
                    <i class='bx bx-chevron-right' id="admin-icon" style="color: #000;"></i>
                </div>
                <ul id="admin-menu" class="navbar-nav d-none">
                    <li class="nav-item <?= $menu == 'admin' ? 'active' : ''; ?>">
                        <a class="nav-link" href="admin">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<script>
    function toggleAdminMenu() {
        const adminMenu = document.getElementById('admin-menu');
        const adminIcon = document.getElementById('admin-icon');
        adminMenu.classList.toggle('d-none'); // Toggle class 'd-none' untuk menampilkan/sembunyikan tautan "ADMIN"
        // Toggle icon class
        if (adminIcon.classList.contains('bx-chevron-right')) {
            adminIcon.classList.remove('bx-chevron-right');
            adminIcon.classList.add('bx-chevron-left');
        } else {
            adminIcon.classList.remove('bx-chevron-left');
            adminIcon.classList.add('bx-chevron-right');
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
