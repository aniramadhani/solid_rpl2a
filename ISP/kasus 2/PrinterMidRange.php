<?php

include_once "PrinterInterface.php";
include_once "ScanInterface.php";

class PrinterMidRange implements PrinterInterface, ScanInterface {
    public function cetak(): void {
        echo "Mencetak dengan printer mid range\n";
    }

    public function scan(): void {
        echo "Menggunakan fitur scan pada printer mid range\n";
    }
}

?>
