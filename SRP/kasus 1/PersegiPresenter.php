<?php

class PersegiPresenter {
    public function tampilkanLuas(Persegi $persegi) {
        echo "Luas persegi dengan sisi " . $persegi->getSisi() . 
        " adalah " . $persegi->hitungLuas() . "\n";
    }
}

?>