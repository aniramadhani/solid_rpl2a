<?php
include_once "PersegiInterface.php";
include_once "KubusOperasiInterface.php";
include_once "Persegi.php";
include_once "Kubus.php";

$persegi = new Persegi(5);
echo "Luas persegi: " . $persegi->hitungLuas() . "\n";

$kubus = new Kubus(5);
echo "Luas kubus: " . $kubus->hitungLuas() . "\n";
echo "Volume kubus: " . $kubus->hitungVolume() . "\n";

?>
