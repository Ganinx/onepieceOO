<?php

class fruits_types
{
private $id;
private $type_name;


    public function __construct($id, $type_name)
    {
        $this->id = $id;
        $this->type_name = $type_name;
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
    public function getTypeName()
    {
        return $this->type_name;
    }

    /**
     * @param mixed $type_name
     */
    public function setTypeName($type_name): void
    {
        $this->type_name = $type_name;
    }


}