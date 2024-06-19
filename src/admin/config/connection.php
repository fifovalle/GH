<?php
session_start();

$urlSekarang = $_SERVER['REQUEST_URI'];
$akarUrl = "/TUBES/";

$namaServer = "localhost";
$namaPengguna = "root";
$kataSandi = "";
$namaDB = "tubes";

$koneksi = new mysqli($namaServer, $namaPengguna, $kataSandi, $namaDB);

function apakahAktif($lokasi)
{
    global $urlSekarang, $akarUrl;
    $urlRelative = str_replace($akarUrl, '', $urlSekarang);
    return $urlRelative === $lokasi;
}

$_SESSION['gagal'] = $_SESSION['gagal'] ?? '';
function setPesanKesalahan($pesan_kesalahan)
{
    $_SESSION['gagal'] = $pesan_kesalahan;
}

function setPesanKeberhasilan($pesan_keberhasilan)
{
    $_SESSION['berhasil'] = $pesan_keberhasilan;
}
