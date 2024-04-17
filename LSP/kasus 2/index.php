<?php
include_once "Kendaraan.php";

function infoKendaraan(Kendaraan $kendaraan) {
    echo "Jenis bahan bakar: " . $kendaraan->jenisBahanBakar() . "\n";
}

$mobil = new Mobil();
echo "Informasi Mobil:\n";
infoKendaraan($mobil);

$mobilListrik = new MobilListrik();
echo "\nInformasi Mobil Listrik:\n";
infoKendaraan($mobilListrik);

?>
