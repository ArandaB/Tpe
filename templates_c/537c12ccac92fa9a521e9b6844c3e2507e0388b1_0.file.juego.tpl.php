<?php
/* Smarty version 4.2.1, created on 2022-10-17 04:19:24
  from 'C:\xampp\htdocs\VC\Tp-especial\templates\juego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cbbace4eab8_13919967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '537c12ccac92fa9a521e9b6844c3e2507e0388b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\VC\\Tp-especial\\templates\\juego.tpl',
      1 => 1665973149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634cbbace4eab8_13919967 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2 class="tituloTable"><?php echo $_smarty_tpl->tpl_vars['juego']->value->name;?>
</h2>
<div class="divCard">
    <div style="width: 18rem;">
        <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['juego']->value->url_img;?>
" alt="Card image cap">
        <div class="card-body">
            <p >Fecha de lanzamiento:<?php echo $_smarty_tpl->tpl_vars['juego']->value->release_date;?>
</p>
            <p ><?php echo $_smarty_tpl->tpl_vars['juego']->value->description;?>
</p>
        </div>
    </div>
</div><?php }
}
