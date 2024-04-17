<?php
include_once "Lampu.php";
include_once "KipasAngin.php";
include_once "Saklar.php";

$lampu = new Lampu();
$saklarLampu = new Saklar($lampu);
echo "Menjalankan saklar lampu:\n";
$saklarLampu->operasiPerangkat();

$kipasAngin = new KipasAngin();
$saklarKipasAngin = new Saklar($kipasAngin);
echo "\nMenjalankan saklar kipas angin:\n";
$saklarKipasAngin->operasiPerangkat();

?>
