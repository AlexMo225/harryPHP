<?php

class Artist {
    private $name;

      // La méthodes
    public function __construct($name) {
        $this->name = $name;
    }

    // Le Getter and setter

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}