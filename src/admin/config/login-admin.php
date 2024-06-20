<?php
include 'databases.php';

$adminDatabase = new Admin($koneksi);

if (isset($_POST['Masuk'])) {
    $emailNamaPengguna = filter_input(INPUT_POST, 'Email_Nama_Pengguna_Admin', FILTER_SANITIZE_EMAIL);
    $kataSandi = filter_input(INPUT_POST, 'Kata_Sandi_Admin', FILTER_SANITIZE_STRING);

    if (empty($emailNamaPengguna) || empty($kataSandi)) {
        setPesanKesalahan("Semua field harus diisi.");
        header("Location: " . $akarUrl . "src/admin/pages/login.php");
        exit();
    }

    $admin = $adminDatabase->autentikasiAdmin($emailNamaPengguna, $kataSandi);

    if ($admin === null) {
        setPesanKesalahan("Maaf, email atau kata sandi yang Anda masukkan tidak ditemukan. Silakan hubungi admin untuk mendaftar.");
        header("Location: " . $akarUrl . "src/admin/pages/login.php");
        exit();
    }

    if ($admin['Status_Verifikasi_Admin'] !== 'Terverifikasi') {
        setPesanKesalahan("Maaf, akun Anda belum terverifikasi.");
        header("Location: " . $akarUrl . "src/admin/pages/login.php");
        exit();
    }

    $_SESSION['ID_Admin'] = htmlspecialchars($admin['ID_Admin']);
    $_SESSION['Foto_Admin'] = htmlspecialchars($admin['Foto_Admin']);
    $_SESSION['Nama_Admin'] = htmlspecialchars($admin['Nama_Pengguna_Admin']);
    $_SESSION['Nama_Depan_Admin'] = htmlspecialchars($admin['Nama_Depan_Admin']);
    $_SESSION['Nama_Belakang_Admin'] = htmlspecialchars($admin['Nama_Belakang_Admin']);
    $_SESSION['Email_Admin'] = htmlspecialchars($admin['Email_Admin']);
    $_SESSION['No_Telepon_Admin'] = htmlspecialchars($admin['No_Telepon_Admin']);
    $_SESSION['Alamat_Admin'] = htmlspecialchars($admin['Alamat_Admin']);
    $_SESSION['Peran_Admin'] = htmlspecialchars($admin['Peran_Admin']);

    setPesanKeberhasilan("Selamat datang, " . $_SESSION['Nama_Admin'] . "!");
    header("Location: " . $akarUrl . "src/admin/");
    exit();
}
