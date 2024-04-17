<?php
include_once "KubusOperasiInterface.php";

class Kubus implements KubusOperasiInterface {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas(): float {
        return 6 * ($this->sisi * $this->sisi);
    }

    public function hitungVolume(): float {
        return $this->sisi * $this->sisi * $this->sisi;
    }
}

?>