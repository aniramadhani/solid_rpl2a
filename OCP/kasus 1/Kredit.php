<?php
class Kredit implements MetodePembayaran {
    public function memprosesPembayaran(): void {
        echo "Pembayaran dengan Kredit diproses\n";
    }
}
?>