<?php

class Role
{

    protected $id;
    private $fk_movie;
    private $fk_actor;
    private $character;

    public function __construct(int $id, int $fk_movie, int $fk_actor, string $character)
    {
        $this->id = $id;
        $this->fk_movie = $fk_movie;
        $this->fk_actor = $fk_actor;
        $this->character = $character;
    }


        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of fk_movie
         */ 
        public function getFk_movie()
        {
                return $this->fk_movie;
        }

        /**
         * Set the value of fk_movie
         *
         * @return  self
         */ 
        public function setFk_movie($fk_movie)
        {
                $this->fk_movie = $fk_movie;

                return $this;
        }

        /**
         * Get the value of fk_actor
         */ 
        public function getFk_actor()
        {
                return $this->fk_actor;
        }

        /**
         * Set the value of fk_actor
         *
         * @return  self
         */ 
        public function setFk_actor($fk_actor)
        {
                $this->fk_actor = $fk_actor;

                return $this;
        }

        /**
         * Get the value of character
         */ 
        public function getCharacter()
        {
                return $this->character;
        }

        /**
         * Set the value of character
         *
         * @return  self
         */ 
        public function setCharacter($character)
        {
                $this->character = $character;

                return $this;
        }
}