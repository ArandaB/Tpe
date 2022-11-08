<?php
/* Smarty version 4.2.1, created on 2022-10-19 14:12:31
  from 'C:\xampp\htdocs\VC\Tpe\templates\tablaCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634fe9af246774_80781570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31097a1ad8ed55a797c1ec512f8df86f274974f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\VC\\Tpe\\templates\\tablaCategorias.tpl',
      1 => 1666181366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.php' => 1,
    'file:templates/footer.html' => 1,
  ),
),false)) {
function content_634fe9af246774_80781570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="tituloTable">Tabla de categorias</h1>

<a class="btnTable btnEnD" href="home"><button>Tabla principal</button></a>

<div class="divTable">
    <table class="tableJuegos">
        <thead class="thead-dark">
            <tr>
                <th>Nombres</th>
                <th>Categoria</th>
                <th>Sobre la categoria</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['juego']->value->id_categorie == 1) {?>
                        <a href="juego/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['juego']->value->name;?>
</a> -
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </td>
                <td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['juego']->value->id_categorie == 1) {?>
                            <?php echo $_smarty_tpl->tpl_vars['juego']->value->categorie;?>

                            <?php break 1;?>
                        <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </td>
                <td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['juego']->value->id_categorie == 1) {?>
                            <?php echo $_smarty_tpl->tpl_vars['juego']->value->features;?>

                            <?php break 1;?>
                        <?php }?>  
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td>
            </tr>
            <tr>
                <td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['juego']->value->id_categorie == 2) {?>
                        <a href="juego/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['juego']->value->name;?>
</a> -
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </td>
                <td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['juego']->value->id_categorie == 2) {?>
                            <?php echo $_smarty_tpl->tpl_vars['juego']->value->categorie;?>

                            <?php break 1;?>
                        <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </td>
                <td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['juego']->value->id_categorie == 2) {?>
                            <?php echo $_smarty_tpl->tpl_vars['juego']->value->features;?>

                            <?php break 1;?>
                        <?php }?>  
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td>
            </tr>
            <tr>
                <td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['juego']->value->id_categorie == 3) {?>
                        <a href="juego/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['juego']->value->name;?>
</a> -
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </td>
                <td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['juego']->value->id_categorie == 3) {?>
                            <?php echo $_smarty_tpl->tpl_vars['juego']->value->categorie;?>

                            <?php break 1;?>
                        <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </td>
                <td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['juego']->value->id_categorie == 3) {?>
                            <?php echo $_smarty_tpl->tpl_vars['juego']->value->features;?>

                            <?php break 1;?>
                        <?php }?>  
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td>
            </tr>
        </tbody>
    </table>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
