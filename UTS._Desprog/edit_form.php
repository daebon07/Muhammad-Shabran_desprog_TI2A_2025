<?php
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

$index = $_GET['index'] ?? null;

if (!is_numeric($index) || $index < 0 || !isset($_SESSION['pendaftar_imami'][$index])) {
    die("Data tidak ditemukan atau indeks tidak valid.");
}

$data_lama = $_SESSION['pendaftar_imami'][$index];

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pendaftaran Anggota</title>
    <link rel="stylesheet" href="assets/style.css?v=601"> 
    <script src="jquery-3.7.1.js"></script>
</head>
<body>
    <div class="container">
        <h1>Edit Data Anggota (ID: <?php echo $index; ?>)</h1>

        <form id="editForm" method="POST" action="update_data.php">
            <input type="hidden" name="index_to_update" value="<?php echo $index; ?>">

            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($data_lama['nama']); ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email Aktif:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($data_lama['email']); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah:</label>
                <input type="text" id="asal_sekolah" name="asal_sekolah" value="<?php echo htmlspecialchars($data_lama['asal_sekolah']); ?>" required>
            </div>

            <div class="form-group">
                <label for="kampus_jurusan">Kampus & Jurusan:</label>
                <input type="text" id="kampus_jurusan" name="kampus_jurusan" value="<?php echo htmlspecialchars($data_lama['kampus_jurusan']); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="bidang_pilihan">Bidang Pilihan:</label>
                <select id="bidang_pilihan" name="bidang_pilihan" required>
                    <?php 
                    $bidang_options = ['Humas', 'Pendikbud', 'Kerohanian', 'Keorganisasian', 'Wirausaha'];
                    foreach ($bidang_options as $option): 
                    ?>
                        <option value="<?php echo $option; ?>" 
                            <?php if ($option == $data_lama['bidang_pilihan']) echo 'selected'; ?>>
                            <?php echo $option; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="komentar">Pesan Singkat & Motivasi Bergabung:</label>
                <textarea id="komentar" name="komentar" rows="4"><?php echo htmlspecialchars($data_lama['komentar']); ?></textarea>
            </div>

            <button type="submit" id="submitBtn">Simpan Perubahan</button>
        </form>
        <p style="margin-top: 20px;"><a href="process.php">Batalkan dan Kembali</a></p>
    </div>
    </body>
</html>