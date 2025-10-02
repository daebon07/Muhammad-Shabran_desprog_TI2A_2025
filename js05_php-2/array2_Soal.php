<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Dosen</title>
    <style>
        /* CSS untuk styling tabel */
        table {
            width: 50%; /* Lebar tabel 50% dari container */
            border-collapse: collapse; /* Menghapus jarak antar border sel */
            margin: 20px 0;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #ddd; /* Garis border abu-abu */
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #4CAF50; /* Warna hijau untuk header */
            color: white; /* Teks putih di header */
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; /* Warna latar selang-seling */
        }
    </style>
</head>
<body>

<?php
$Dosen = [
    'nama' => 'Elok Nur Hamdana',
    'domisili' => 'Malang',
    'jenis_kelamin' => 'Perempuan' 
];
?>

<h2>Detail Informasi Dosen</h2>

<table>
    <thead>
        <tr>
            <th>Keterangan</th>
            <th>Data</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nama</td>
            <td><?php echo $Dosen['nama']; ?></td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td><?php echo $Dosen['domisili']; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $Dosen['jenis_kelamin']; ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>