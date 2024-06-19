<?php
include 'databases.php';

if (isset($_POST['Simpan'])) {
    $namaDepan = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['Nama_Depan_Pengguna']));
    $namaBelakang = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['Nama_Belakang_Pengguna']));
    $namaPengguna = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['Nama_Pengguna']));
    $emailPengguna = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['Email_Pengguna']));
    $kataSandi = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['Kata_Sandi_Pengguna']));
    $konfirmasiKataSandi = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['Konfirmasi_Kata_Sandi_Pengguna']));
    $nomorTelepon = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['No_Telepon_Pengguna']));
    $alamatPengguna = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['Alamat_Pengguna']));
    $obyekPengguna = new Pengguna($koneksi);
    do {
        $token = random_int(10000000, 99999999);
        $tokenSudahAda = $obyekPengguna->getPenggunaByToken($token);
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



    if (empty($namaDepan) || empty($namaBelakang) || empty($namaPengguna) || empty($emailPengguna) ||  empty($kataSandi) || empty($konfirmasiKataSandi) || empty($nomorTelepon) || empty($alamatPengguna)) {
        $pesanKesalahan .= "Semua bidang harus diisi. ";
    }

    $panjangKataSandi = strlen($kataSandi) >= 8;
    $persyaratanKataSandi = preg_match('/[A-Z]/', $kataSandi) && preg_match('/[a-z]/', $kataSandi) && preg_match('/[0-9]/', $kataSandi) && preg_match('/[^A-Za-z0-9]/', $kataSandi);
    $kataSandiYangValid = $panjangKataSandi && $persyaratanKataSandi;
    $pesanKesalahan .= (!$kataSandiYangValid && empty($pesanKesalahan)) ? "Kata sandi harus memiliki setidaknya 8 karakter dan mengandung minimal satu huruf besar, satu huruf kecil, satu angka, dan satu simbol." : '';

    $kecocokanKataSandi = $kataSandi === $konfirmasiKataSandi;
    $pesanKesalahan .= (!$kecocokanKataSandi && empty($pesanKesalahan)) ? "Kata sandi dan konfirmasi kata sandi harus sama." : '';

    $hashKataSandi = password_hash($kataSandi, PASSWORD_DEFAULT);

    if (!filter_var($emailPengguna, FILTER_VALIDATE_EMAIL)) {
        $pesanKesalahan .= "Format email tidak valid. ";
    }

    if (!is_numeric($nomorTelepon)) {
        $pesanKesalahan .= "Nomor telepon hanya boleh berisi angka. ";
    }

    $fotoPengguna = $_FILES['Foto_Pengguna'];

    $namaFotoPengguna = mysqli_real_escape_string($koneksi, htmlspecialchars($fotoPengguna['name']));
    $fotoPenggunaTemp = $fotoPengguna['tmp_name'];
    $ukuranFotoPengguna = $fotoPengguna['size'];
    $errorFotoPengguna = $fotoPengguna['error'];

    $tujuanFotoPengguna = '';
    $ukuranMaksimal = 2 * 1024 * 1024;

    $apakahaUnggahBerhasil = ($errorFotoPengguna === 0 && !empty($namaFotoPengguna)) && ($ukuranFotoPengguna <= $ukuranMaksimal);
    $pesanKesalahan .= (!$apakahaUnggahBerhasil && empty($pesanKesalahan)) ? "Gagal mengupload foto Pengguna atau foto tidak diunggah atau ukuran melebihi batas maksimal 2MB." : '';

    $formatYangDisetujui = ['jpg', 'jpeg', 'png'];
    $formatFoto = strtolower(pathinfo($namaFotoPengguna, PATHINFO_EXTENSION));
    $apakahFormatDisetujui = in_array($formatFoto, $formatYangDisetujui);
    $pesanKesalahan .= (!$apakahFormatDisetujui && empty($pesanKesalahan)) ? "Format foto harus berupa JPG, JPEG, atau PNG." : '';

    $namaFotoPenggunaBaru = $apakahFormatDisetujui ? uniqid('Pengguna_') . '.' . $formatFoto : '';

    $tujuanFotoPengguna = $apakahFormatDisetujui ? '../uploads/' . $namaFotoPenggunaBaru : '';

    $apakahBerhasilDipindahkan = $apakahFormatDisetujui ? move_uploaded_file($fotoPenggunaTemp, $tujuanFotoPengguna) : false;
    $pesanKesalahan .= (!$apakahBerhasilDipindahkan && empty($pesanKesalahan)) ? "Gagal mengupload foto Pengguna." : '';

    if (!empty($pesanKesalahan)) {
        setPesanKesalahan($pesanKesalahan);
        header("Location: $akarUrl" . "src/admin/pages/data-user.php");
        exit;
    }

    if ($obyekPengguna->cekEmailPenggunaSudahAda($emailPengguna)) {
        setPesanKesalahan("Email yang dimasukkan sudah terdaftar.");
        header("Location: $akarUrl" . "src/admin/pages/data-user.php");
        exit;
    }


    if ($obyekPengguna->cekEmailPenggunaSudahAda($emailPengguna)) {
        setPesanKesalahan("Email yang dimasukkan sudah terdaftar.");
        header("Location: $akarUrl" . "src/admin/pages/data-user.php");
        exit;
    }

    $lokasiPenyimpanan = "../uploads/";
    $tujuanFotoPengguna = $lokasiPenyimpanan . $namaFotoPenggunaBaru;

    $dataPengguna = array(
        'Foto_Pengguna' => $tujuanFotoPengguna,
        'Nama_Depan_Pengguna' => $namaDepan,
        'Nama_Belakang_Pengguna' => $namaBelakang,
        'Nama_Pengguna' => $namaPengguna,
        'Email_Pengguna' => $emailPengguna,
        'Kata_Sandi_Pengguna' => $hashKataSandi,
        'Konfirmasi_Kata_Sandi_Pengguna' => $hashKataSandi,
        'No_Telepon_Pengguna' => $nomorTeleponFormatted,
        'Alamat_Pengguna' => $alamatPengguna,
        'Status_Verifikasi_Pengguna' => "Belum Terverifikasi",
        'Token_Pengguna' => $token
    );

    $simpanDataPengguna = $obyekPengguna->tambahPengguna($dataPengguna);

    if ($simpanDataPengguna) {
    } else {
        setPesanKesalahan("Gagal menyimpan data pengguna.");
    }
    header("Location: $akarUrl" . "src/admin/pages/data-user.php");
    exit;
} else {
    header("Location: $akarUrl" . "src/admin/pages/data-user.php");
    exit;
}
