<?php
include_once "MetodePembayaran.php";

class Cash implements MetodePembayaran {
    public function memprosesPembayaran(): void {
        echo "Pembayaran dengan Cash diproses\n";
    }
}


?>