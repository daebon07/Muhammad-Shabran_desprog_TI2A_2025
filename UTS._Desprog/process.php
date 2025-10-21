<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_SESSION['pendaftar_imami'])) {
    $_SESSION['pendaftar_imami'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $asal_sekolah = htmlspecialchars($_POST['asal_sekolah'] ?? '');
    $kampus_jurusan = htmlspecialchars($_POST['kampus_jurusan'] ?? '');
    $bidang_pilihan = htmlspecialchars($_POST['bidang_pilihan'] ?? '');
    $komentar = htmlspecialchars($_POST['komentar'] ?? '');

    $pengguna_baru = [
        'nama' => $nama,
        'email' => $email,
        'asal_sekolah' => $asal_sekolah,
        'kampus_jurusan' => $kampus_jurusan,
        'bidang_pilihan' => $bidang_pilihan,
        'komentar' => $komentar
    ];

    $_SESSION['pendaftar_imami'][] = $pengguna_baru;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pendaftaran Berhasil</title>
    <link rel="stylesheet" href="style.css"> 
    <script src="jquery-3.7.1.js"></script>
</head>
<body>
    <div class="container" id="resultContainer" style="display: none;"> 
        <h1>Pendaftaran Berhasil Disimpan! 🎉</h1>
        
        <div class="user-info">
            <h2>Detail Pendaftaran Anda:</h2>
            <p><strong>Nama Lengkap:</strong> <?php echo $nama ?></p> 
            <p><strong>Email Aktif:</strong> <?php echo $email ?></p>
            <p><strong>Asal Sekolah:</strong> <?php echo $asal_sekolah ?></p>
            <p><strong>Kampus & Jurusan:</strong> <?php echo $kampus_jurusan ?></p>
            <p><strong>Bidang Pilihan:</strong> <?php echo $bidang_pilihan ?></p>
            <p><strong>Motivasi Bergabung:</strong> <?php echo $komentar ?></p>
        </div>
        
        <hr>
        
        <h2>Daftar Anggota Tersimpan (Total <?php echo count($_SESSION['pendaftar_imami']) ?> Orang):</h2>
        <table>
            <thead>
                <tr>
                    <th>Aksi</th> <th>Nama</th>
                    <th>Sekolah</th>
                    <th>Bidang</th>
                    <th>Motivasi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($_SESSION['pendaftar_imami'] as $key => $user): 
                ?>
                <tr>
                    <td>
                        <a href="edit_form.php?index=<?php echo $key; ?>">Edit</a>
                    </td>
                    <td><?php echo htmlspecialchars($user['nama']) ?></td>
                    <td><?php echo htmlspecialchars($user['asal_sekolah']) ?></td>
                    <td><?php echo htmlspecialchars($user['bidang_pilihan']) ?></td>
                    <td><?php echo htmlspecialchars($user['komentar']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <p style="margin-top: 25px;"><a href="indeks.html">Daftar Anggota Lain</a></p>
    </div>

    <script>
        $(document).ready(function() {
            $('#resultContainer').fadeIn(1000);
        });
    </script>
</body>
</html>

