<?php
/* Smarty version 4.2.1, created on 2022-10-17 04:10:35
  from 'C:\xampp\htdocs\VC\Tp-especial\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cb99becc593_28592116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f890f6f162c0cdfd245cb201ecf1118c1203b17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\VC\\Tp-especial\\templates\\login.tpl',
      1 => 1665972325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.php' => 1,
    'file:templates/footer.html' => 1,
  ),
),false)) {
function content_634cb99becc593_28592116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="tituloTable"><span class="nameNav">Log</span>In</h1>
<div class="divLogin">
    <form action="verify" method="post">
    <div class="form-outline mb-4">
        <input type="text" name="user" id="form2Example1" class="form-control" placeholder="Usuario" />       
    </div>
    <div class="form-outline mb-4">
        <input type="password" placeholder="Contraseña" name="password" id="form2Example2" class="form-control" />       
    </div>
        <button type="submit" class="btn btn-primary btn-block mb-2">Sign in</button>
    </form>
</div>
<h2 class="tituloTable"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h2>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
