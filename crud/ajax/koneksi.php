<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB1', 'prakwebdb');

$db1 = new PDO("mysql:host=".HOST.";dbname=".DB1, USER, PASS);
$db1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>