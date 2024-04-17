<?php
class Debit implements MetodePembayaran {
    public function memprosesPembayaran(): void {
        echo "Pembayaran dengan Debit diproses\n";
    }
}
?>