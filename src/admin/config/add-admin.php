<?php
include 'databases.php';


if (isset($_POST['Simpan'])) {
    $namaDepan = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['Nama_Depan_Admin']));
    $namaBelakang = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['Nama_Belakang_Admin']));
    $email = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['Email_Admin']));
    $namaPenggunaAdmin = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['Nama_Pengguna_Admin']));
    $kataSandi = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['Kata_Sandi_Admin']));
    $konfirmasiKataSandi = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['Konfirmasi_Kata_Sandi_Admin']));
    $nomorTelepon = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['No_Telepon_Admin']));
    $alamatAdmin = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['Alamat_Admin']));
    $peranAdmin = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['Peran_Admin']));
    $obyekAdmin = new Admin($koneksi);
    do {
        $token = random_int(10000000, 99999999);
        $tokenSudahAda = $obyekAdmin->getAdminByToken($token);
    } while ($tokenSudahAda);

    $pesanKesalahan = '';

    $nomorTelepon = str_replace([' ', '-', '+'], '', $nomorTelepon);

    if (substr($nomorTelepon, 0, 1) === '0') {
        $nomorTelepon = '62' . substr($nomorTelepon, 1);
    } elseif (substr($nomorTelepon, 0, 2) !== '62') {
        $nomorTelepon = '62' . $nomorTelepon;
    }

    $nomorTeleponFormatted = '+62 ' . substr($nomorTelepon, 2, 3) . '-' . substr($nomorTelepon, 5, 4) . '-' . substr($nomorTelepon, 9);

    echo $nomorTeleponFormatted;


    if (empty($namaDepan) || empty($namaBelakang) || empty($namaPenggunaAdmin) || empty($email) ||  empty($kataSandi) || empty($konfirmasiKataSandi) || empty($nomorTelepon) || empty($peranAdmin) || empty($alamatAdmin)) {
        $pesanKesalahan .= "Semua bidang harus diisi. ";
    }

    $panjangKataSandi = strlen($kataSandi) >= 8;
    $persyaratanKataSandi = preg_match('/[A-Z]/', $kataSandi) && preg_match('/[a-z]/', $kataSandi) && preg_match('/[0-9]/', $kataSandi) && preg_match('/[^A-Za-z0-9]/', $kataSandi);
    $kataSandiYangValid = $panjangKataSandi && $persyaratanKataSandi;
    $pesanKesalahan .= (!$kataSandiYangValid && empty($pesanKesalahan)) ? "Kata sandi harus memiliki setidaknya 8 karakter dan mengandung minimal satu huruf besar, satu huruf kecil, satu angka, dan satu simbol." : '';

    $kecocokanKataSandi = $kataSandi === $konfirmasiKataSandi;
    $pesanKesalahan .= (!$kecocokanKataSandi && empty($pesanKesalahan)) ? "Kata sandi dan konfirmasi kata sandi harus sama." : '';

    $hashKataSandi = password_hash($kataSandi, PASSWORD_DEFAULT);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $pesanKesalahan .= "Format email tidak valid. ";
    }

    if (!is_numeric($nomorTelepon)) {
        $pesanKesalahan .= "Nomor telepon hanya boleh berisi angka. ";
    }

    $fotoAdmin = $_FILES['Foto_Admin'];

    $namaFotoAdmin = mysqli_real_escape_string($koneksi, htmlspecialchars($fotoAdmin['name']));
    $fotoAdminTemp = $fotoAdmin['tmp_name'];
    $ukuranFotoAdmin = $fotoAdmin['size'];
    $errorFotoAdmin = $fotoAdmin['error'];

    $tujuanFotoAdmin = '';
    $ukuranMaksimal = 2 * 1024 * 1024;

    $apakahaUnggahBerhasil = ($errorFotoAdmin === 0 && !empty($namaFotoAdmin)) && ($ukuranFotoAdmin <= $ukuranMaksimal);
    $pesanKesalahan .= (!$apakahaUnggahBerhasil && empty($pesanKesalahan)) ? "Gagal mengupload foto admin atau foto tidak diunggah atau ukuran melebihi batas maksimal 2MB." : '';

    $formatYangDisetujui = ['jpg', 'jpeg', 'png'];
    $formatFoto = strtolower(pathinfo($namaFotoAdmin, PATHINFO_EXTENSION));
    $apakahFormatDisetujui = in_array($formatFoto, $formatYangDisetujui);
    $pesanKesalahan .= (!$apakahFormatDisetujui && empty($pesanKesalahan)) ? "Format foto harus berupa JPG, JPEG, atau PNG." : '';

    $namaFotoAdminBaru = $apakahFormatDisetujui ? uniqid() . '.' . $formatFoto : '';

    $tujuanFotoAdmin = $apakahFormatDisetujui ? '../uploads/' . $namaFotoAdminBaru : '';

    $apakahBerhasilDipindahkan = $apakahFormatDisetujui ? move_uploaded_file($fotoAdminTemp, $tujuanFotoAdmin) : false;
    $pesanKesalahan .= (!$apakahBerhasilDipindahkan && empty($pesanKesalahan)) ? "Gagal mengupload foto admin." : '';

    if (!empty($pesanKesalahan)) {
        setPesanKesalahan($pesanKesalahan);
        header("Location: $akarUrl" . "src/admin/pages/data-admin.php");
        exit;
    }

    if ($obyekAdmin->cekEmailSudahAda($email)) {
        setPesanKesalahan("Email yang dimasukkan sudah terdaftar.");
        header("Location: $akarUrl" . "src/admin/pages/data-admin.php");
        exit;
    }

    $dataAdmin = array(
        'Foto_Admin' => $namaFotoAdminBaru,
        'Nama_Depan_Admin' => $namaDepan,
        'Nama_Belakang_Admin' => $namaBelakang,
        'Email_Admin' => $email,
        'Nama_Pengguna_Admin' => $namaPenggunaAdmin,
        'Kata_Sandi_Admin' => $hashKataSandi,
        'Konfirmasi_Kata_Sandi_Admin' => $hashKataSandi,
        'No_Telepon_Admin' => $nomorTeleponFormatted,
        'Alamat_Admin' => $alamatAdmin,
        'Peran_Admin' => $peranAdmin,
        'Status_Verifikasi_Admin' => "Belum Terverifikasi",
        'Token_Admin' => $token
    );

    $simpanDataAdmin = $obyekAdmin->tambahAdmin($dataAdmin);

    if ($simpanDataAdmin) {
    } else {
        setPesanKesalahan("Gagal menyimpan data admin.");
    }
    header("Location: $akarUrl" . "src/admin/pages/data-admin.php");
    exit;
} else {
    header("Location: $akarUrl" . "src/admin/pages/data-admin.php");
    exit;
}
