<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class JuegosViews{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showJuegosTable($juegos){
        $this->smarty->assign('juegos', $juegos);
        $this->smarty->assign('titulo', 'Juegos mejor valorados de la historia');
        $this->smarty->display('./templates/tablaJuegos.tpl');
    }

    function tableCategories($juegos){
        $this->smarty->assign('juegos', $juegos);
        $this->smarty->display('./templates/tablaCategorias.tpl');
    }

    function showJuego($juego){
        include ("templates/header.php");
        $this->smarty->assign('juego', $juego);
        $this->smarty->display('./templates/juego.tpl');
        include ("templates/footer.html");
    }

    function RedirectHome(){
        header("Location: ".BASE_URL."home");
    }

    function redirectLogin(){
        header("Location: ".BASE_URL."login");
    }

    function editView($id){
        include ("templates/header.php");
        $this->smarty->assign('id', $id);
        $this->smarty->display('./templates/editJuego.tpl');
        include ("templates/footer.html");
    }
}