<?php
require_once 'Media.php';

class Book extends Media {
    private $author;
    private $pages;

        // La méthodes

    public function __construct($title, $author, $pages) {
        parent::__construct($title);
        $this->author = $author;
        $this->pages = $pages;
    }

    // le Getters and setters
    
    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getPages() {
        return $this->pages;
    }

    public function setPages($pages) {
        $this->pages = $pages;
    }
}
