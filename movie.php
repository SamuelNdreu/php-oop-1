<?php 
    class Movie{
        public $title;
        public $plot;
        public $genre;
        function __construct( $_title, $_plot, $_genre)
        {
        $this->title = $_title;
        $this->plot = $_plot;
        $this->genre = $_genre;
        }

        public function getName(){
        return $this->title;
        }
    }

?>