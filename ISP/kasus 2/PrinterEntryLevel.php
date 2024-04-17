<?php
include_once "PrinterInterface.php";

class PrinterEntryLevel implements PrinterInterface {
    public function cetak(): void {
        echo "Mencetak dengan printer entry level\n";
    }
}

?>
