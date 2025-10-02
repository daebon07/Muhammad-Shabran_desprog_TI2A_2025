<?php

function perkenalan(){
    echo "Assalamualaikum,";
    echo "Perkenalkan, nama saya Shabran<br>"; 
    echo "Senang berkenalan dengan Anda<br>";
}

perkenalan();
echo "<hr>";
perkenalan();


?>

<?php
function perkenalan($nama, $salam){
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . ".<br>";
    echo "Senang berkenalan dengan Anda<br>";
}

perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

perkenalan($saya, $ucapanSalam);

?>

<?php
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . ".<br>";
    echo "Senang berkenalan dengan Anda<br>";
}

perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);
?>