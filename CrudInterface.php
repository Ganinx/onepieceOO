<?php

interface CrudInterface{
    public function find($element,$deep=false);

    public  function findAll();

    public function delete($obj);

    public function push($obj);

    public function modif($obj);
}