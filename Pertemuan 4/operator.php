<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Penjumlahan: {$a} + {$b} = {$hasilTambah} <br>";
echo "Pengurangan: {$a} - {$b} = {$hasilKurang} <br>";
echo "Perkalian: {$a} * {$b} = {$hasilKali} <br>";
echo "Pembagian: {$a} / {$b} = {$hasilBagi} <br>";
echo "Sisa bagi: {$a} % {$b} = {$sisaBagi} <br>";
echo "Pangkat: {$a} ** {$b} = {$pangkat} <br>";

$a = 10;
$b = 5;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah {$a} == {$b}? ";
var_dump($hasilSama);
echo "<br>";

echo "Apakah {$a} != {$b}? ";
var_dump($hasilTidakSama);
echo "<br>";

echo "Apakah {$a} < {$b}? ";
var_dump($hasilLebihKecil);
echo "<br>";

echo "Apakah {$a} > {$b}? ";
var_dump($hasilLebihBesar);
echo "<br>";

echo "Apakah {$a} <= {$b}? ";
var_dump($hasilLebihKecilSama);
echo "<br>";

echo "Apakah {$a} >= {$b}? ";
var_dump($hasilLebihBesarSama);
echo "<br>";

$a = 10;
$b = 5;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Nilai a: {$a} <br>";
echo "Nilai b: {$b} <br><br>";

echo "Hasil AND (a && b): ";
var_dump($hasilAnd);
echo "<br>";

echo "Hasil OR (a || b): ";
var_dump($hasilOr);
echo "<br>";

echo "Hasil NOT (!a): ";
var_dump($hasilNotA);
echo "<br>";

echo "Hasil NOT (!b): ";
var_dump($hasilNotB);
echo "<br>";


$a = 10;
$b = 5;

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

$a = 10;
$b = 5;

echo "Nilai awal a: 10 <br>";
echo "Nilai b: 5 <br><br>";

$a += $b;
echo "Setelah a += b, nilai a: {$a} <br>";

$a -= $b;
echo "Setelah a -= b, nilai a: {$a} <br>";

$a *= $b;
echo "Setelah a *= b, nilai a: {$a} <br>";

$a /= $b;
echo "Setelah a /= b, nilai a: {$a} <br>";

$a %= $b;
echo "Setelah a %= b, nilai a: {$a} <br>";


$a = 10;
$b = 5;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

$a = 10;
$b = 5;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Nilai a: {$a} <br>";
echo "Nilai b: {$b} <br><br>";

echo "Apakah a === b? ";
var_dump($hasilIdentik);
echo "<br>";

echo "Apakah a !== b? ";
var_dump($hasilTidakIdentik);
echo "<br>";

$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;
$persenKosong = ($kursiKosong / $totalKursi) * 100;

echo "Total kursi: {$totalKursi} <br>";
echo "Kursi terisi: {$kursiTerisi} <br>";
echo "Kursi kosong: {$kursiKosong} <br>";
echo "Persentase kursi kosong: {$persenKosong}% <br>";
?>



