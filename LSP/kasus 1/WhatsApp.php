<?php
include_once "MediaSosial.php";

class WhatsApp extends MediaSosial implements VideoGroupManager {
    public function chat(): void {
        echo "Chatting on WhatsApp\n";
    }

    public function callGroupVideo(): void {
        echo "Calling group video on WhatsApp\n";
    }
}

?>
