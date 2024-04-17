<?php
include_once "PerangkatElektronikInterface.php";

class Saklar {
    private PerangkatElektronikInterface $perangkat;

    public function __construct(PerangkatElektronikInterface $perangkat) {
        $this->perangkat = $perangkat;
    }

    public function operasiPerangkat(): void {
        $this->perangkat->operasi();
    }
}
?>