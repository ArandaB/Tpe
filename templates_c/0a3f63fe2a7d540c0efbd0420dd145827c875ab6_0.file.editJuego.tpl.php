<?php
/* Smarty version 4.2.1, created on 2022-10-17 04:02:38
  from 'C:\xampp\htdocs\VC\Tp-especial\templates\editJuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cb7bee50087_39376244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a3f63fe2a7d540c0efbd0420dd145827c875ab6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\VC\\Tp-especial\\templates\\editJuego.tpl',
      1 => 1665972155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634cb7bee50087_39376244 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h4 class="tituloTable">Editar juego numero: <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h4>
<form action="editGame/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
    <label>Nombre:</label><input type="text" name="name" required>
    <label>Categoria:</label><select name="categorie" required>
    <option value="action">Accion</option>
    <option value="adventure">Aventura</option>
    <option value="sport">Deporte</option>
    </select>
    <label>Fecha de lanzamiento:</label><input type="date" name="date" required>
    <label>Descripcion:</label><input type="text" name="description" required>
    <button class="btnTable btnEnD" type="submit">Guardar</button>
    <a class="btnTable btnEnD" href="home"><button>Volver</button></a>
</form>
<?php }
}
