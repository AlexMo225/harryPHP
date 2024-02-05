<?php
class Song {
    private $title;
    private $artist;
    private $runtime;

      // La méthodes

    public function __construct($title, $artist, $runtime) {
        $this->title = $title;
        $this->artist = $artist;
        $this->runtime = $runtime;
    }

    // le Getters and setters
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getArtist() {
        return $this->artist;
    }

    public function setArtist($artist) {
        $this->artist = $artist;
    }

    public function getRuntime() {
        return $this->runtime;
    }

    public function setRuntime($runtime) {
        $this->runtime = $runtime;
    }
}
