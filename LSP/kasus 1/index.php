<?php
include_once "Instagram.php";
include_once "WhatsApp.php";

function interactWithMedia(MediaSosial $media) {
    $media->chat();

    if ($media instanceof PostMediaManager) {
        $media->publishPost();
    }

    if ($media instanceof VideoGroupManager) {
        $media->callGroupVideo();
    }
}

$instagram = new Instagram();
echo "Interacting with Instagram:\n";
interactWithMedia($instagram);

$whatsapp = new WhatsApp();
echo "\nInteracting with WhatsApp:\n";
interactWithMedia($whatsapp);
?>
