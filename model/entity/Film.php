<?php

class Film
{

    private $title;
    private $director;
    private $poster;
    private $year;
    // private $type;


    public function __construct($title, $director, $poster, $year)
    {
        $this->title = $title;
        $this->director = $director;
        $this->poster = $poster;
        $this->year = $year;
    }

        /**
         * Get the value of title
         */ 
        public function getTitle()
        {
                return $this->title;
        }

        /**
         * Set the value of title
         *
         * @return  self
         */ 
        public function setTitle($title)
        {
                $this->title = $title;

                return $this;
        }

        /**
         * Get the value of director
         */ 
        public function getDirector()
        {
                return $this->director;
        }

        /**
         * Set the value of director
         *
         * @return  self
         */ 
        public function setDirector($director)
        {
                $this->director = $director;

                return $this;
        }

        /**
         * Get the value of poster
         */ 
        public function getPoster()
        {
                return $this->poster;
        }

        /**
         * Set the value of poster
         *
         * @return  self
         */ 
        public function setPoster($poster)
        {
                $this->poster = $poster;

                return $this;
        }

        /**
         * Get the value of year
         */ 
        public function getYear()
        {
                return $this->year;
        }

        /**
         * Set the value of year
         *
         * @return  self
         */ 
        public function setYear($year)
        {
                $this->year = $year;

                return $this;
        }
}