<?php
include_once "DBMS.php";

class MongoDB implements DBMS {
    public function createConnection(): void {
        echo "Connection to MongoDB established\n";
    }
}
?>