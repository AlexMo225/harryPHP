<?php
abstract class Media {
    protected $title;
    protected $isCheckedOut = false;
    protected $ratings = [];


  // La méthodes
   
    public function __construct($title) {
        $this->title = $title;
    }

    public function toggleCheckOutStatus() {
        $this->isCheckedOut = !$this->isCheckedOut;
    }

    public function addRating($rating) {
        if ($rating >= 1 && $rating <= 5) {
            $this->ratings[] = $rating;
        }
    }

    public function getAverageRating() {
        if (empty($this->ratings)) {
            return 0;
        }
        $sum = array_sum($this->ratings);
        return $sum / count($this->ratings);
    }

    // le Getters and setters
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getIsCheckedOut() {
        return $this->isCheckedOut;
    }

    public function setIsCheckedOut($isCheckedOut) {
        $this->isCheckedOut = $isCheckedOut;
    }
}
