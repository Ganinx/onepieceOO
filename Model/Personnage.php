<?php

class Personnage{
    private $id;
    private $name;
    private $image;
    private $prime;
    private $description;


    public function __construct($id, $name, $image, $prime,$description = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->prime = $prime;
        $this->description = $description;
    }

    public function getDescription(): mixed
    {
        return $this->description;
    }

    public function setDescription(mixed $description): void
    {
        $this->description = $description;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getPrime()
    {
        return $this->prime;
    }

    /**
     * @param mixed $prime
     */
    public function setPrime($prime): void
    {
        $this->prime = $prime;
    }


}