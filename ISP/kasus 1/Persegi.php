<?php
include_once "PersegiInterface.php";
include_once "KubusOperasiInterface.php";

class Persegi implements PersegiInterface {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas(): float {
        return $this->sisi * $this->sisi;
    }
}

?>