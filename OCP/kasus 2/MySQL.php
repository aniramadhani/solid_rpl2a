<?php
include_once "DBMS.php";

class MySQL implements DBMS {
    public function createConnection(): void {
        echo "Connection to MySQL established\n";
    }
}
?>