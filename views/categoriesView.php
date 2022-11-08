<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class categoriesView{

    function __construct(){
        $this->smarty = new Smarty();
    }

    function tableCategories($juegos){
        $this->smarty->assign('juegos', $juegos);
        $this->smarty->display('./templates/tablaCategorias.tpl');
    }
}