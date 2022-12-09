<?php
class Movie
{
    public $title;
    public $genre;
    public $actors;
    public $nation;
    public $year;

    function __construct(String $title, array $genre, array $actors, String $nation, Int $year)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->actors = $actors;
        $this->nation = $nation;
        $this->year = $year;
    }
}
