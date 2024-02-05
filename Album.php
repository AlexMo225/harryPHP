<?php
require_once 'Media.php';

class Album extends Media {
    private $artist;
    private $songs; // Array of Song objects

    // La méthodes
    
    public function __construct($title, $artist, array $songs) {
        parent::__construct($title);
        $this->artist = $artist;
        $this->songs = $songs;
    }

    // Getters and setters
    public function getArtist() {
        return $this->artist;
    }

    public function setArtist($artist) {
        $this->artist = $artist;
    }

    public function getSongs() {
        return $this->songs;
    }

    public function setSongs(array $songs) {
        $this->songs = $songs;
    }
}
