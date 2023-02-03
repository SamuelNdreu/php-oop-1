<?php
class Movies
{
    public $title;
    public $year;
    public $genre;
    public $director;
    public $overview;
    function __construct($_title, $_year, $_genre, $_director, $_overview)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->director = $_director;
        $this->overview = $_overview;
    }
    public function GetTitle()
    {
        return $this->title;
    }
    public function GetYear()
    {
        return $this->year;
    }
    public function GetGenre()
    {
        return $this->genre;
    }
    public function GetDirector()
    {
        return $this->director;
    }

    public function GetOverview()
    {
        return $this->overview;
    }
}
