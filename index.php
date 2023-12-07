<?php
require 'CrudInterface.php';
require 'model/manager/Dbmanager.php';
require 'model/Personnage.php';
require 'model/fruits_types.php';
require 'model/Fruit.php';
require 'model/manager/FruitManager.php';
require 'model/Race.php';
require 'model/Bateau.php';
require 'model/Users.php';

require 'model/manager/PersonnageManager.php';




$personnages = new PersonnageManager();

$fruit = new FruitManager();

var_dump($fruit->genRand());



