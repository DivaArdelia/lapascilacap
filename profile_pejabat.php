<?php
include 'koneksi.php';
include 'function.php';
$menu = 'beranda';
?>

<!DOCTYPE html>
<html lang="id">
<?php include 'head.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Profile Pejabat</title>
        <style>
            .body {
                font-family: Arial, Helvetica, sans-serif;
                background: #ffffffff;
                margin: 0;
                padding: 30px;
            }
            .page-title {
                margin-top: 120px; /* sesuaikan tinggi header */
                text-align: center;
                margin-bottom: 50px;
            }

            .page-title h2 {
                font-size: 32px;
                font-weight: 700;
                color: #1f2937;
            }

            .struktur-wrapper {
                display: flex;
                gap: 24px;
                max-width: 1100px;
                margin: auto;
            }

            /* MENU KIRI */
            .jabatan-menu {
                width: 210px;
                background: #eaeae1;
                border-radius: 12px;
                overflow: hidden;

                /* BORDER */
                border: 1px solid #e0e0e0;

                /* SHADOW */
                box-shadow: 
                    0 4px 12px rgba(0, 0, 0, 0.08),
                    0 1px 3px rgba(0, 0, 0, 0.05);
                height: fit-content; 
            }

            .jabatan-item {
                padding: 16px 18px;
                color: #fff;
                cursor: pointer;
                border-bottom: 1px solid rgba(255,255,255,0.15);
                transition: 0.3s;
            }

            .jabatan-item:hover {
                background: #084b7c;
            }

            .jabatan-item.active {
                background: #ffffff;
                color: #0b5fa5;
                font-weight: bold;
            }

            /* KONTEN KANAN */
            .jabatan-content {
                flex: 1;
            }

            .content-panel {
                display: none;
            }

            .content-panel.show {
                display: block;
            }

            /* CV ATS STYLE */
            .cv-card {
                background: #ffffff;
                border-radius: 12px;
                padding: 24px;
                box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            }

            .cv-header {
                display: flex;
                gap: 20px;
                align-items: center;
                padding-bottom: 16px;
                border-bottom: 1px solid #eee;
            }

            .cv-photo {
                width: 90px;
                height: 110px;
                object-fit: cover;
                border-radius: 8px;
                border: 1px solid #ccc;
            }

            .cv-header h3 {
                margin: 0;
                font-size: 20px;
            }

            .cv-header .jabatan {
                color: #666;
                font-size: 14px;
                margin-top: 4px;
            }

            .cv-section {
                margin-top: 20px;
            }

            .cv-section h4 {
                margin-bottom: 8px;
                font-size: 15px;
                color: #0b5fa5;
            }

            .cv-section ul {
                padding-left: 18px;
                margin: 0;
            }

            .cv-section p {
                margin: 0;
                line-height: 1.6;
            }
        </style>
    </head>
<body class="body">
<?php include 'navbar.php'; ?>

    <section class="page-title">
    <h2>Profile Pejabat Lembaga Pemasyarakatan Kelas IIB Cilacap</h2>
    </section>

    <div class="struktur-wrapper">

        <!-- MENU KIRI -->
        <div class="jabatan-menu">
            <div class="jabatan-item active" data-target="kepala">Kepala</div>
            <div class="jabatan-item" data-target="eselon4">Eselon IV</div>
            <div class="jabatan-item" data-target="eselon5">Eselon V</div>
            <div class="jabatan-item" data-target="staff">Staff</div>
        </div>

        <!-- KONTEN KANAN -->
        <div class="jabatan-content">

            <!-- KEPALA -->
            <div class="content-panel show" id="kepala">
                <div class="cv-card">
                    <div class="cv-header">
                        <img src="assets/profile.jpg" class="cv-photo" alt="Foto Profil">
                        <div>
                            <h3>Nama Kepala Lapas</h3>
                            <div class="jabatan">Kepala Lapas Kelas IIB Cilacap</div>
                        </div>
                    </div>

                    <div class="cv-section">
                        <h4>Deskripsi Singkat</h4>
                        <p>
                            Pejabat struktural yang bertanggung jawab atas
                            penyelenggaraan pembinaan dan pengelolaan lembaga pemasyarakatan.
                        </p>
                    </div>

                    <div class="cv-section">
                        <h4>Latar Belakang Pendidikan</h4>
                        <ul>
                            <li>S1 Ilmu Hukum</li>
                            <li>S2 Administrasi Publik</li>
                        </ul>
                    </div>

                    <div class="cv-section">
                        <h4>Riwayat Jabatan</h4>
                        <ul>
                            <li>Kepala Seksi Pembinaan</li>
                            <li>Kepala Bidang Keamanan</li>
                            <li>Kepala Lapas Kelas IIB</li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <!-- PANEL LAIN (placeholder) -->
            <div class="content-panel" id="eselon4">
                <div class="cv-card">
                    <p>Data Eselon IV akan ditampilkan di sini.</p>
                </div>
            </div>

            <div class="content-panel" id="eselon5">
                <div class="cv-card">
                    <p>Data Eselon V akan ditampilkan di sini.</p>
                </div>
            </div>

            <div class="content-panel" id="staff">
                <div class="cv-card">
                    <p>Daftar staff akan ditampilkan di sini.</p>
                </div>
            </div>

        </div>
    </div>

    <script>
        document.querySelectorAll('.jabatan-item').forEach(item => {
            item.addEventListener('click', () => {
                document.querySelectorAll('.jabatan-item').forEach(i => i.classList.remove('active'));
                document.querySelectorAll('.content-panel').forEach(p => p.classList.remove('show'));

                item.classList.add('active');
                document.getElementById(item.dataset.target).classList.add('show');
            });
        });
    </script>
    <?php include 'foot.php'; ?>
</body>

</html>
