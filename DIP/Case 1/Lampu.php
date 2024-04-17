<?php
include_once "PerangkatElektronikInterface.php";

class Lampu implements PerangkatElektronikInterface {
    public function operasi(): void {
        echo "Lampu menyala\n";
    }
}

?>
