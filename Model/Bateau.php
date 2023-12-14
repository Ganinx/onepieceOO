<?php

class Bateau
{
private $id;
private $bateau_name;
private $image_bateau;


    public function __construct($id, $bateau_name, $image_bateau)
    {
        $this->id = $id;
        $this->bateau_name = $bateau_name;
        $this->image_bateau = $image_bateau;
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
    public function getBateauName()
    {
        return $this->bateau_name;
    }

    /**
     * @param mixed $bateau_name
     */
    public function setBateauName($bateau_name): void
    {
        $this->bateau_name = $bateau_name;
    }

    /**
     * @return mixed
     */
    public function getImageBateau()
    {
        return $this->image_bateau;
    }

    /**
     * @param mixed $image_bateau
     */
    public function setImageBateau($image_bateau): void
    {
        $this->image_bateau = $image_bateau;
    }


}