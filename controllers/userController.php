<?php

require_once './models/userModel.php';
require_once './views/userView.php';
require_once './views/juegosView.php';

class userController{

    private $model;
    private $view;
    private $viewJ;

    function __construct(){
        $this->model = new userModel;
        $this->view = new userViews;
        $this->viewJ = new JuegosViews;
    }

    function logIn(){
        session_start();
        if(isset($_SESSION["user"])){
            $this->view->showUser($_SESSION["user"]);       
        }else{
            $this->view->showLogin();
        }    
    }

    function verifyUser(){
        if(!empty($_POST['user']) && !empty($_POST['password'])){
            $user = $_POST['user'];
            $password = $_POST['password'];
        
            $getUser = $this->model->getUser($user);

            if($user && password_verify($password, $getUser->password)){
            session_start();
            $_SESSION["user"] = $user;

            $this->viewJ->RedirectHome();
            }else{
            $this->view->showLogin("Acceso denegado");
            }
        }else{
            $this->view->showLogin("Acceso denegado");
        }    
    }

    function logOut(){
        session_start();
        session_destroy();
        $this->view->showLogin("Hasta la proxima");
    }

}