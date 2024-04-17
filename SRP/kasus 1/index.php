<?php
include_once "Persegi.php";
include_once "PersegiPresenter.php";

$sisi = 5;
$persegi = new Persegi($sisi);

$presenter = new PersegiPresenter();
$presenter->tampilkanLuas($persegi);

?>