<?php
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: process.php");
    exit;
}

$index = $_POST['index_to_update'] ?? null;

if (!is_numeric($index) || $index < 0 || !isset($_SESSION['pendaftar_imami'][$index])) {
    die("Error: Index data untuk update tidak valid.");
}

$nama = htmlspecialchars($_POST['nama'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$asal_sekolah = htmlspecialchars($_POST['asal_sekolah'] ?? '');
$kampus_jurusan = htmlspecialchars($_POST['kampus_jurusan'] ?? '');
$bidang_pilihan = htmlspecialchars($_POST['bidang_pilihan'] ?? '');
$komentar = htmlspecialchars($_POST['komentar'] ?? '');

$data_baru = [
    'nama' => $nama,
    'email' => $email,
    'asal_sekolah' => $asal_sekolah,
    'kampus_jurusan' => $kampus_jurusan,
    'bidang_pilihan' => $bidang_pilihan,
    'komentar' => $komentar
];

$_SESSION['pendaftar_imami'][$index] = $data_baru;

header("Location: process.php");
exit;