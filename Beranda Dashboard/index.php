<?php
// index.php
// Ini adalah file beranda utama Anda.
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

    <div class="page-container">
        
        <?php
            // Memasukkan file sidebar.php ke dalam halaman ini
            include 'sidebar.php';
        ?>

        <main class="main-content">
            <header class="main-header">
                <button class="sidebar-toggle" id="sidebarToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </header>
            <div class="welcome-card">
         <h1>Selamat datang di Master Standard</h1>

<p>
    Pemeliharaan ketertelusuran metrologi legal nasional adalah tugas bersama antara Pemerintah, Pemerintahan Daerah, masyarakat pengguna, dan pemilik Standar Ukuran Metrologi Legal (SUML). Pemeliharaan ketertelusuran ini tercermin dari kegiatan verifikasi SUML yang dilakukan secara berjenjang sesuai kewenangan masing-masing instansi pengelola.
</p>

<p>
    Melalui portal Master Standard ini, diharapkan berbagai kolaborasi dan kegiatan yang terkait pemeliharaan ketertelusuran dapat disajikan secara komprehensif. Portal ini sekaligus berfungsi sebagai sarana untuk pemantauan, evaluasi, dan acuan dalam pelaksanaan kegiatan verifikasi. Beberapa pencapaian sasaran mutu BP SUML juga dapat dievaluasi melalui portal ini. Untuk itu, kandungan informasi dalam Master Standard ini selalu dimutakhirkan.
</p>

<p>
    Secara garis besar, isi dari portal Master Standard ini adalah:
</p>

<ol type="a">
    <li>Kolaborasi pengisian data SUML milik UPT dan UML</li>
    <li>Data pelayanan, rekapitulasi aduan, survei kepuasan pelayanan, dan lingkup akreditasi BP SUML</li>
    <li>Capaian Kinerja dan Anggaran BP SUML</li>
    <li>Instruksi Kerja dan cerapan verifikasi SUML</li>
</ol>

<p>
    Untuk menggunakan instruksi kerja dan cerapan, pengguna diminta untuk login atau registrasi ke email: <strong>mutu.bpsuml@gmail.com</strong> dengan judul “Registrasi Pengguna Master Standard” dan mengisi data sebagai berikut:
</p>

<p>
    Nama:<br>
    Unit Kerja:<br>
    NIP:
</p>

<p>
    Bandung, November 2025,<br><br>
    <strong>Manajemen Balai Pengelolaan SUML</strong>
</p>
            </div>
        </main>
        
    </div>

    <script src="script.js"></script>
</body>
</html>
