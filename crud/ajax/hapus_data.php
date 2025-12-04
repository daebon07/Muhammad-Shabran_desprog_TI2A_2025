<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$id = $_POST['id'];

// Query Hapus Data PDO MySQL
$query = "DELETE FROM anggota WHERE id=?";
$sql = $db1->prepare($query);
$sql->execute([$id]);

echo json_encode(['success' => 'Sukses']);

$db1 = null;
?>