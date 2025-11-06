<?php
$upload_dir = "images/"; 
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0755, true);
}

if (!empty($_FILES['files'])) {
    $totalFiles = count($_FILES['files']['name']);
    $successCount = 0;
    $errorMessages = [];
    $allowedExtensions = array("jpg", "jpeg", "png", "gif", "webp");
    $maxFileSize = 2 * 1024 * 1024; 

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileTmpName = $_FILES['files']['tmp_name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileError = $_FILES['files']['error'][$i];
        if ($fileError == UPLOAD_ERR_NO_FILE) {
            continue; 
        }

        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $currentFileErrors = [];
        if (!in_array($fileExt, $allowedExtensions)) {
            $currentFileErrors[] = "File '{$fileName}': Ekstensi tidak diizinkan. Hanya JPG, JPEG, PNG, GIF, WEBP.";
        }
        if ($fileSize > $maxFileSize) {
            $currentFileErrors[] = "File '{$fileName}': Ukuran melebihi 2 MB.";
        }
        if ($fileError !== UPLOAD_ERR_OK && $fileError !== UPLOAD_ERR_NO_FILE) {
            $currentFileErrors[] = "File '{$fileName}': Terjadi kesalahan upload PHP dengan kode: {$fileError}.";
        }
        if (empty($currentFileErrors)) {
            $destination = $upload_dir . $fileName;
            if (move_uploaded_file($fileTmpName, $destination)) {
                $successCount++;
            } else {
                $currentFileErrors[] = "File '{$fileName}': Gagal memindahkan file ke direktori tujuan.";
            }
        }
        if (!empty($currentFileErrors)) {
            $errorMessages = array_merge($errorMessages, $currentFileErrors);
        }
    }
    if ($successCount > 0) {
        echo "Berhasil mengunggah {$successCount} file gambar.<br>";
    }
    if (!empty($errorMessages)) {
        echo implode("<br>", $errorMessages);
    } elseif ($successCount == 0 && empty($errorMessages)) {
        echo "Tidak ada file gambar yang diunggah.";
    }

} else {
    echo "Tidak ada file yang dipilih untuk diunggah.";
}
?>