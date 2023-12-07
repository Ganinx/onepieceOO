<?php

class Users
{
private $id;
private $firstname;
private $id_bateau;
private $id_race;
private $id_fruit;


    public function __construct($id, $firstname, $id_bateau, $id_race, $id_fruit)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->id_bateau = $id_bateau;
        $this->id_race = $id_race;
        $this->id_fruit = $id_fruit;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getIdBateau()
    {
        return $this->id_bateau;
    }

    /**
     * @param mixed $id_bateau
     */
    public function setIdBateau($id_bateau): void
    {
        $this->id_bateau = $id_bateau;
    }

    /**
     * @return mixed
     */
    public function getIdRace()
    {
        return $this->id_race;
    }

    /**
     * @param mixed $id_race
     */
    public function setIdRace($id_race): void
    {
        $this->id_race = $id_race;
    }

    /**
     * @return mixed
     */
    public function getIdFruit()
    {
        return $this->id_fruit;
    }

    /**
     * @param mixed $id_fruit
     */
    public function setIdFruit($id_fruit): void
    {
        $this->id_fruit = $id_fruit;
    }


}