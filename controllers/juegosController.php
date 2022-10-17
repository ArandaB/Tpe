<?php
require_once './views/juegosView.php';
require_once './models/juegosModel.php';




class juegosController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new JuegosModel;
        $this->view = new JuegosViews;
    }

    function showHome(){
        $this->checkLoggedIn();
        $juegos = $this->model->getJuegos();
        $this->view->showJuegosTable($juegos);
    }

    function showCategories(){
        $this->checkLoggedIn();
        $categoriesTable = $this->model->getCategories();
        $this->view->tableCategories($categoriesTable);
    }

    function viewJuego($id){
        $this->checkLoggedIn();
        $juego = $this->model->getJuego($id);
        $this->view->showJuego($juego);
    }

    function createGame(){
        $select = $_POST['categorie'];
        switch($select){
            case "action":
                $categorie = "Accion";
                $id_categorie = 3;
                break;
            case "adventure":
                $categorie = "Aventura";
                $id_categorie = 1;
                break;
            case "sport":
                $categorie = "Deporte";
                $id_categorie = 2;
                break;
        }

        if( $_FILES['img']['type'] == "image/jpg" ||
            $_FILES['img']['type'] == "image/jpeg" ||
            $_FILES['img']['type'] == "image/png" ){
            $this->model->insertGame($_POST['name'], $_POST['id'], $_POST['description'], $_POST['release_date'], $_FILES['img']['tmp_name'], $categorie, $id_categorie);
            $this->view->RedirectHome();
        }
        else{
            $this->model->insertGame($_POST['name'], $_POST['id'], $_POST['description'], $_POST['release_date'], $categorie, $id_categorie); 
        }
    }

    function deleteGame($id){
        $this->model->deleteGameFromDB($id);
        $this->view->RedirectHome();
    }

    function editWindow($id){
        $this->view->editView($id);
    }

    function editGame($id){
        $select = $_POST['categorie'];
        switch($select){
            case "action":
                $categorie = "Accion";
                $id_categorie = 3;
                break;
            case "adventure":
                $categorie = "Aventura";
                $id_categorie = 1;
                break;
            case "sport":
                $categorie = "Deporte";
                $id_categorie = 2;
                break;
        }
        $this->model->editGame($_POST['name'], $id, $_POST['date'], $categorie, $_POST['description'], $id_categorie);
        $this->view->RedirectHome();
    }

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["user"])){
            $this->view->redirectLogin();
        }
    }
}