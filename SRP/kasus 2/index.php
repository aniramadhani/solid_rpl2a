<?php
include_once "Mahasiswa.php";
include_once "MahasiswaManager.php";

$manager = new MahasiswaManager();

$mahasiswa1 = new Mahasiswa("2205003", "AHMAD RIFAI");
$mahasiswa2 = new Mahasiswa("3005022", "ALEX");
$manager->tambahMahasiswa($mahasiswa1);
$manager->tambahMahasiswa($mahasiswa2);

echo "Daftar Mahasiswa:\n";
$manager->tampilkanDaftarMahasiswa();


$manager->hapusMahasiswa("3005022");


echo "\nDaftar Mahasiswa Setelah Menghapus:\n";
$manager->tampilkanDaftarMahasiswa();
?>