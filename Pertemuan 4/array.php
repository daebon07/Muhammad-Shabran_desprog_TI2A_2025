<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(", ", $nilaiLulus)  ;



$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "<br>============================================\n";
echo "<br>Daftar Karyawan dengan Pengalaman > 5 Tahun\n";
echo "<br>============================================\n";

if (count($karyawanPengalamanLimaTahun) > 0) {
    foreach ($karyawanPengalamanLimaTahun as $index => $nama) {
        echo  "<br>. $nama\n";
    }
} else {
    echo "<br>Tidak ada karyawan dengan pengalaman lebih dari 5 tahun.\n";
}

echo "<br>============================================\n";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "<br>============================================<br>";
echo "Daftar Nilai Mahasiswa - Mata Kuliah: $mataKuliah<br>";
echo "============================================<br>";

foreach ($daftarNilai[$mataKuliah] as $index => $nilai) {
    $nomor = $index + 1;
    echo "$nomor. Nama: {$nilai[0]}, Nilai: {$nilai[1]}<br>";
}

echo "============================================<br>";


$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$totalNilai = 0;
foreach ($daftarNilai as $siswa) {
    $totalNilai += $siswa[1];
}

$jumlahSiswa = count($daftarNilai);
$rataRata = $totalNilai / $jumlahSiswa;

echo "<br>Rata-rata nilai kelas: $rataRata<br>";
echo "====================================<br>";
echo "Siswa dengan nilai di atas rata-rata:<br>";
echo "====================================<br>";

foreach ($daftarNilai as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "Nama: {$siswa[0]}, Nilai: {$siswa[1]}<br>";
    }
}
?>



