<?php
/* Smarty version 4.2.1, created on 2022-10-17 03:35:25
  from 'C:\xampp\htdocs\VC\Tp-especial\templates\header.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cb15d200424_85652987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65047f433a3e99a7ca94c22cc71bee856b7db335' => 
    array (
      0 => 'C:\\xampp\\htdocs\\VC\\Tp-especial\\templates\\header.php',
      1 => 1665970523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634cb15d200424_85652987 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo '<?php'; ?>
 echo BASE_URL <?php echo '?>'; ?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>GameStation</title>
</head>
<body>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h4 class="h4Nav"><span class="nameNav">Game</span>Station</h4>
          <ul class="navList">
            <li class="homeNav"><a href="home">Home</a></li>
            <li class="loginNav"><a href="login">Login</a></li>
          </ul>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a href="home"><img class="navImg" src="./img/logo-2020071418174554700.png" alt=""></a>
        </div>
      </nav>
      <?php }
}
