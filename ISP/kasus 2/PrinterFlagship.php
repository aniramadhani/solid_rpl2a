<?php

include_once "PrinterInterface.php";
include_once "FaxInterface.php";

class PrinterFlagship implements PrinterInterface, FaxInterface {
    public function cetak(): void {
        echo "Mencetak dengan printer flagship\n";
    }

    public function fax(): void {
        echo "Mengirim fax dengan printer flagship\n";
    }
}


?>
