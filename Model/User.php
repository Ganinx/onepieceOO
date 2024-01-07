<?php

class User
{

    private $id;

    private $firstname;

    private $lastname;

    private $email;

    private $password;

    private $username;


    public function __construct($id, $firstname, $lastname, $email, $password, $username)
{
    $this->id = $id;
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->email = $email;
    $this->password = $password;
    $this->username = $username;
}/**
 * @return mixed
 */
public function getId()
{
    return $this->id;
}/**
 * @param mixed $id
 */
public function setId($id): void
{
    $this->id = $id;
}/**
 * @return mixed
 */
public function getFirstname()
{
    return $this->firstname;
}/**
 * @param mixed $firstname
 */
public function setFirstname($firstname): void
{
    $this->firstname = $firstname;
}/**
 * @return mixed
 */
public function getLastname()
{
    return $this->lastname;
}/**
 * @param mixed $lastname
 */
public function setLastname($lastname): void
{
    $this->lastname = $lastname;
}/**
 * @return mixed
 */
public function getEmail()
{
    return $this->email;
}/**
 * @param mixed $email
 */
public function setEmail($email): void
{
    $this->email = $email;
}/**
 * @return mixed
 */
public function getPassword()
{
    return $this->password;
}/**
 * @param mixed $password
 */
public function setPassword($password): void
{
    $this->password = $password;
}/**
 * @return mixed
 */
public function getUsername()
{
    return $this->username;
}/**
 * @param mixed $username
 */
public function setUsername($username): void
{
    $this->username = $username;
}



}