<?php
abstract class MediaSosial {
    abstract public function chat(): void;
}

interface PostMediaManager {
    public function publishPost(): void;
}

interface VideoGroupManager {
    public function callGroupVideo(): void;
}
?>