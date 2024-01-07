<?php

class Equipage
{
private $id;
private $name_equipage;
private $id_bateau;
private $id_race;
private $id_fruit;
private $id_user;


    public function __construct($id, $name_equipage, $id_bateau, $id_race, $id_fruit,$id_user)
    {
        $this->id = $id;
        $this->name_equipage = $name_equipage;
        $this->id_bateau = $id_bateau;
        $this->id_race = $id_race;
        $this->id_fruit = $id_fruit;
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user): void
    {
        $this->id_user = $id_user;
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
    public function getNameEquipage()
    {
        return $this->name_equipage;
    }


    public function setNameEquipage($name_equipage): void
    {
        $this->name_equipage = $name_equipage;
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