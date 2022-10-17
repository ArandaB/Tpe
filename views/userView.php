<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class userViews{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showLogin($error = ""){
        $this->smarty->assign('titulo', 'Log in');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
    }

    function showUser($user){
        $this->smarty->assign('user', $user);
        $this->smarty->display('templates/user.tpl');
    }
}    