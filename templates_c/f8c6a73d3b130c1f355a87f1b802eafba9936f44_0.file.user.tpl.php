<?php
/* Smarty version 4.2.1, created on 2022-10-17 04:05:33
  from 'C:\xampp\htdocs\VC\Tp-especial\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cb86d5e6076_61456929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8c6a73d3b130c1f355a87f1b802eafba9936f44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\VC\\Tp-especial\\templates\\user.tpl',
      1 => 1665972331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.php' => 1,
    'file:templates/footer.html' => 1,
  ),
),false)) {
function content_634cb86d5e6076_61456929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="tituloTable">Hola <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
!!</h1>
<a class="btn" href="logout"><button>Log Out</button></a>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
