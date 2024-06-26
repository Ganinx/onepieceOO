<?php

abstract class Dbmanager
{

    private $host = 'localhost';
    private $dbName = 'onepiece';
    private $user = 'root';
    private $password = '';
    protected $bdd;

    public function __construct(){
        $this->bdd= new PDO(
            'mysql:host='.$this->host.';dbname='.$this->dbName.';charset=utf8',
            $this->user,
            $this->password);

        $this->bdd->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
    }

}