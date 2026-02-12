<?php

class Movie
{
    use Ratable; // Utilizzo del trait

    public $title;
    public $hours;
    public $description;
    protected Genere $genere;
    public $cover;


    public function __construct($title, $hours, $description, Genere $genere, $cover = null)
    {

        $this->title = $title;
        $this->hours = $hours;
        $this->description = $description;
        $this->genere = $genere;
        $this->cover = $cover;
    }

    public function getGenere()
    {
        return $this->genere->getGenere();
    }
}
