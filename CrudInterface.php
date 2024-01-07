<?php

interface CrudInterface{
    public function find($id);

    public  function findAll();

    public function delete($obj);

    public function push($obj);

    public function modif($obj);
}