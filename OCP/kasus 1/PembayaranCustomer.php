<?php 
class PembayaranCustomer {
    private MetodePembayaran $metode;

    public function __construct(MetodePembayaran $metode) {
        $this->metode = $metode;
    }

    public function prosesPembayaran(): void {
        $this->metode->memprosesPembayaran();
    }
}
?>