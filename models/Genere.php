<?php

class Genere
{

    protected string $genere;

    public function __construct(string $genere)
    {
        $this->genere = $genere;
    }
    public function getGenere()
    {
        return $this->genere;
    }
}
