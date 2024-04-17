<?php
abstract class Kendaraan {
    abstract public function jenisBahanBakar(): string;
}

class Mobil extends Kendaraan {
    public function jenisBahanBakar(): string {
        return "Bensin";
    }
}

class MobilListrik extends Kendaraan {
    public function jenisBahanBakar(): string {
        return "Baterai";
    }
}

?>
