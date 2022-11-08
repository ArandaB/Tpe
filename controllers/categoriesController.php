<?php
require_once 'models/categoriesModel.php';
require_once 'views/categoriesView.php';

class categoriesController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new categoriesModel;
        $this->view = new categoriesView;
    }

    function showCategories(){
        $this->checkLoggedIn();
        $categoriesTable = $this->model->getCategories();
        $this->view->tableCategories($categoriesTable);
    }

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["user"])){
            header("Location: ".BASE_URL."login");
        }
    }

}