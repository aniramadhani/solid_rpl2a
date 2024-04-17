<?php
include_once "MediaSosial.php";

class Instagram extends MediaSosial implements PostMediaManager {
    public function chat(): void {
        echo "Chatting on Instagram\n";
    }

    public function publishPost(): void {
        echo "Publishing post on Instagram\n";
    }
}

?>
