<?php
// Settingan default Laragon: User 'root', Password kosong
$connect = mysqli_connect("localhost", "root", "", "prakwebdb");

if (!$connect) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
?>