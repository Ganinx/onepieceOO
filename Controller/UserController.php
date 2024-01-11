<?php

class UserController
{

    private $userManager;


    public function __construct()
    {
        $this->userManager = new UserManager();
    }

    public function login(){

        session_start();
        $error = false;
        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            $user = $this->userManager->findLogin();

            if ($user){

                if (password_verify($_POST["password"], $user->getPassword())){

                    session_start();

                    $_SESSION["user"] = serialize($user);
                    if($this->userManager->checkNameEquipage($user->getFirstname())){
                        $_SESSION['equip'] = true;
                    }

                    header("Location: index.php?controller=guest&action=page");
                }else {
                    $error =true;
                }
            }else{
                $error =true;
            }
        }if (array_key_exists("user",$_SESSION)){
            header("Location: index.php?controller=user&action=list");
        }

        require "View/security/login.php";
    }

    public function register(){

        session_start();

        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            $errors = $this->isValidRegister();

            if (count($errors) == 0){


                $user = new User(null,$_POST["firstname"],$_POST["lastname"],$_POST["email"],password_hash($_POST["password"],PASSWORD_DEFAULT),$_POST["username"]);

                $this->userManager->push($user);

                session_start();

                $_SESSION["user"] = serialize($user);

                header("Location: index.php?controller=user&action=list");
            }

        }
        if (array_key_exists("user",$_SESSION)){
            header("Location: index.php?controller=user&action=list");
        }
        require 'View/Security/register.php';
    }

    private function isValidRegister(){

        $errors = [];


        if(empty($_POST["username"])){
            $errors["username"] = "Veuillez entrer un User";
        }
        if(empty($_POST["email"])){
            $errors["email"] = "Veuillez entrer un email";
        }elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $errors["email"] = "Veuillez entrer un email valide";
        }
        if(empty($_POST["firstname"])){
            $errors["firstname"] = "Veuillez entrer un prénom";
        }
        if(empty($_POST["lastname"])){
            $errors["lastname"] = "Veuillez entrer un nom";
        }
        if(empty($_POST["password"])){
            $errors["password"] = "Veuillez entrer un password";
        }elseif(strlen($_POST["password"] )> 50){
            $errors["password"] = 'Le mot de passe est trop long';
        }elseif (!preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,}$/', $_POST["password"])) {
            $errors["password"] = 'Le mot de passe doit contenir:<ul>
<li>8 caracteres minimum</li>
<li>Une minuscule minimum</li>
<li>Une majuscule minimum</li>
<li>Un caractere spécial minimum (ex: "!/?.;...")</li>      
</ul>';
        }
        if(empty($_POST["confirm-password"])){
            $errors["confirm-password"] = "Veuillez confirmer votre mot de passe";
        }elseif($_POST['password'] != $_POST['confirm-password']){
            $errors["confirm-password"] = "Veuillez mettre le meme mot de passe";
        }

        return $errors;
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: index.php?controller=security&action=login");
    }



}