<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

echo "Target jarak: {$jarakTarget} km<br>";
echo "Peningkatan harian: {$peningkatanHarian} km<br><br>";

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
    echo "Hari ke-{$hari}: Jarak saat ini = {$jarakSaatIni} km<br>";
}

echo "<br>Atlet tersebut memerlukan <strong>{$hari} hari</strong> untuk mencapai jarak 500 kilometer.";


$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

echo "Jumlah lahan: {$jumlahLahan} <br>";
echo "Tanaman per lahan: {$tanamanPerLahan} <br>";
echo "Buah per tanaman: {$buahPerTanaman} <br><br>";

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
    echo "Lahan ke-{$i}: menghasilkan " . ($tanamanPerLahan * $buahPerTanaman) . " buah<br>";
}

echo "<br><strong>Jumlah buah yang akan dipanen adalah: {$jumlahBuah}</strong><br>";


$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

echo "Daftar skor ujian:<br>";
foreach ($skorUjian as $index => $skor) {
    echo "Ujian ke-" . ($index + 1) . ": {$skor} <br>";
    $totalSkor += $skor;
}

echo "<br><strong>Total skor ujian adalah: {$totalSkor}</strong><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

echo "<h3>Hasil Evaluasi Nilai Siswa</h3>";

foreach ($nilaiSiswa as $index => $nilai) {
    echo "Siswa ke-" . ($index + 1) . ": Nilai = {$nilai} - ";
    if ($nilai < 60) {
        echo "<span style='color:red;'>Tidak lulus</span><br>";
        continue;
    }
    echo "<span style='color:green;'>Lulus</span><br>";
}


$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$nilaiTersaring = array_slice($nilaiSiswa, 2, count($nilaiSiswa) - 4);

$totalNilai = array_sum($nilaiTersaring);

$rataRata = $totalNilai / count($nilaiTersaring);

echo "Nilai yang digunakan: " . implode(", ", $nilaiTersaring) . "<br>";
echo "Total nilai setelah penyaringan: {$totalNilai} <br>";
echo "Rata-rata nilai: {$rataRata}<br>";

$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 0.20 * $hargaProduk;
}

$hargaAkhir = $hargaProduk - $diskon;

echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "<strong>Harga yang harus dibayar: Rp " . number_format($hargaAkhir, 0, ',', '.') . "</strong> <br>";

$poin = 520;

echo "Total skor pemain adalah: {$poin} <br>";

if ($poin > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}
?>









