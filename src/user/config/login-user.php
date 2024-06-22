<?php
include 'databases.php';

$penggunaDatabase = new Pengguna($koneksi);

if (isset($_POST['Masuk'])) {
    $emailNamaPengguna = filter_input(INPUT_POST, 'Email_Nama_Pengguna', FILTER_SANITIZE_EMAIL);
    $kataSandi = filter_input(INPUT_POST, 'Kata_Sandi_Pengguna', FILTER_SANITIZE_STRING);

    if (empty($emailNamaPengguna) || empty($kataSandi)) {
        setPesanKesalahan("Semua field harus diisi.");
        header("Location: " . $akarUrl . "src/user/pages/login.php");
        exit();
    }

    $pengguna = $penggunaDatabase->autentikasiUser($emailNamaPengguna, $kataSandi);

    if ($pengguna === null) {
        setPesanKesalahan("Maaf, email atau kata sandi yang Anda masukkan tidak ditemukan. Silakan hubungi pengguna untuk mendaftar.");
        header("Location: " . $akarUrl . "src/user/pages/login.php");
        exit();
    }


    $_SESSION['ID_Pengguna'] = htmlspecialchars($pengguna['ID_Pengguna']);
    $_SESSION['Foto_Pengguna'] = htmlspecialchars($pengguna['Foto_Pengguna']);
    $_SESSION['Nama_Pengguna'] = htmlspecialchars($pengguna['Nama_Pengguna']);
    $_SESSION['Nama_Depan_Pengguna'] = htmlspecialchars($pengguna['Nama_Depan_Pengguna']);
    $_SESSION['Nama_Belakang_Pengguna'] = htmlspecialchars($pengguna['Nama_Belakang_Pengguna']);
    $_SESSION['Email_Pengguna'] = htmlspecialchars($pengguna['Email_Pengguna']);
    $_SESSION['No_Telepon_Pengguna'] = htmlspecialchars($pengguna['No_Telepon_Pengguna']);
    $_SESSION['Alamat_Pengguna'] = htmlspecialchars($pengguna['Alamat_Pengguna']);

    setPesanKeberhasilan("Selamat datang, " . $_SESSION['Nama_Pengguna'] . "!");
    header("Location: " . $akarUrl . "src/user/");
    exit();
}
