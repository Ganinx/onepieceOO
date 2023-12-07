<?php

class Fruit
{
private $id;
private $fruit_name;
private $id_type_fruit;


    public function __construct($id, $fruit_name, $id_type_fruit)
    {
        $this->id = $id;
        $this->fruit_name = $fruit_name;
        $this->id_type_fruit = $id_type_fruit;
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
    public function getFruitName()
    {
        return $this->fruit_name;
    }

    /**
     * @param mixed $fruit_name
     */
    public function setFruitName($fruit_name): void
    {
        $this->fruit_name = $fruit_name;
    }

    /**
     * @return mixed
     */
    public function getIdTypeFruit()
    {
        return $this->id_type_fruit;
    }

    /**
     * @param mixed $id_type_fruit
     */
    public function setIdTypeFruit($id_type_fruit): void
    {
        $this->id_type_fruit = $id_type_fruit;
    }


}