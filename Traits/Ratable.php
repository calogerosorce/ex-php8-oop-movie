<?php

trait Ratable
{
    public $rating = 0;

    public function setRating($rating)
    {
        if ($rating >= 0 && $rating <= 10) {
            $this->rating = $rating;
        } else {
            throw new Exception("Rating must be between 0 and 10");
        }
    }

    public function getRating()
    {
        return $this->rating;
    }
}
