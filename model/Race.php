<?php

class Race
{
private $id;
private $nom_race;
private $image_race;


    public function __construct($id, $nom_race, $image_race)
    {
        $this->id = $id;
        $this->nom_race = $nom_race;
        $this->image_race = $image_race;
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
    public function getNomRace()
    {
        return $this->nom_race;
    }

    /**
     * @param mixed $nom_race
     */
    public function setNomRace($nom_race): void
    {
        $this->nom_race = $nom_race;
    }

    /**
     * @return mixed
     */
    public function getImageRace()
    {
        return $this->image_race;
    }

    /**
     * @param mixed $image_race
     */
    public function setImageRace($image_race): void
    {
        $this->image_race = $image_race;
    }


}