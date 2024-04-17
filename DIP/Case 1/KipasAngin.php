<?php

include_once "PerangkatElektronikInterface.php";

class KipasAngin implements PerangkatElektronikInterface {
    public function operasi(): void {
        echo "Kipas angin berputar\n";
    }
}

?>
