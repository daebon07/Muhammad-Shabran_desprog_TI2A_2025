<?php
$targetDirectory = "images/"; 
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}
if (isset($_FILES['images']) && !empty($_FILES['images']['name'][0])) {
    $totalFiles = count($_FILES['images']['name']);
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['images']['name'][$i];
        $fileTmpName = $_FILES['images']['tmp_name'][$i];
        $fileSize = $_FILES['images']['size'][$i];
        $fileType = $_FILES['images']['type'][$i];
        $fileError = $_FILES['images']['error'][$i];
        $targetFile = $targetDirectory . basename($fileName);
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $maxFileSize = 5 * 1024 * 1024;

        if ($fileError !== 0) {
            echo "Gagal mengunggah $fileName: Error kode $fileError.<br>";
        } elseif (!in_array($fileType, $allowedTypes)) {
            echo "Gagal mengunggah $fileName: Hanya JPG, PNG, atau GIF yang diizinkan.<br>";
        } elseif ($fileSize > $maxFileSize) {
            echo "Gagal mengunggah $fileName: Ukuran file melebihi 5MB.<br>";
        } else {
            if (move_uploaded_file($fileTmpName, $targetFile)) {
                echo "Gambar $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal memindahkan gambar $fileName.<br>";
            }
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah.";
}
?>