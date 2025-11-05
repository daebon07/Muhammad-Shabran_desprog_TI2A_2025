<?php
$pattern1 = '/[a-z]/'; 
$text1 = 'This is a Sample Text.';

echo "<h3>Hasil Pengujian 5.1 (preg_match dasar)</h3>";
if (preg_match($pattern1, $text1)) {
    echo "Hasil: Huruf kecil ditemukan!<br>";
} else {
    echo "Hasil: Tidak ada huruf kecil!<br>";
}
echo "<hr>";

$pattern2 = '/[0-9]+/'; 
$text2 = 'There are 123 apples.';
$matches = [];

echo "<h3>Hasil Pengujian 5.2 (preg_match dengan \$matches)</h3>";
if (preg_match($pattern2, $text2, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!<br>";
}
$pattern3 = '/apple/';
$replacement3 = 'banana';
$text3 = 'I like apple pie.';

$new_text3 = preg_replace($pattern3, $replacement3, $text3);

echo "<h3>Hasil Pengujian Tambahan (preg_replace)</h3>";
echo "Teks Asli: " . $text3 . "<br>";
echo "Pola Diganti: " . $pattern3 . " menjadi " . $replacement3 . "<br>";
echo "Teks Baru: " . $new_text3 . "<br>";
echo "<hr>";

$pattern4 = '/go*d/'; 
$text4 = 'god is good.';
$matches4 = [];

echo "<h3>Hasil Pengujian Tambahan (Quantifier *)</h3>";
if (preg_match($pattern4, $text4, $matches4)) {
    echo "Cocokkan: " . $matches4[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!<br>";
}
echo "<hr>";
$pattern5 = '/go?d/'; 
$text5 = 'god is good.';
$matches5 = [];

echo "<h3>Hasil Pengujian Tambahan (Quantifier ?)</h3>";
if (preg_match($pattern5, $text5, $matches5)) {
    echo "Cocokkan: " . $matches5[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!<br>";
}
echo "<hr>";

$pattern6 = '/go{2,3}d/'; 
$text6 = 'god is good. The best is goood.';
$matches6 = [];

echo "<h3>Hasil Pengujian Tambahan (Quantifier {n,m})</h3>";
if (preg_match($pattern6, $text6, $matches6)) {
    echo "Cocokkan: " . $matches6[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!<br>";
}
echo "<hr>";
?>