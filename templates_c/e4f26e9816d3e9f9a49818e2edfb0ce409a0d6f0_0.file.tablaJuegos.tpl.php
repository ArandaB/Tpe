<?php
/* Smarty version 4.2.1, created on 2022-10-17 03:50:49
  from 'C:\xampp\htdocs\VC\Tp-especial\templates\tablaJuegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cb4f95939d0_34508591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4f26e9816d3e9f9a49818e2edfb0ce409a0d6f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\VC\\Tp-especial\\templates\\tablaJuegos.tpl',
      1 => 1665971447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.php' => 1,
    'file:templates/footer.html' => 1,
  ),
),false)) {
function content_634cb4f95939d0_34508591 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<h1 class="tituloTable"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<p class="tituloTable">(informacion recolectada de MetaCritic)</p>
<a class="btnTable btnEnD" href="showCategories"><button>Tabla de Categorias</button></a>
<div class="divTable">
    <table class="tableJuegos">
        <thead class="thead-dark">
            <tr>
                <th>Posicion</th>
                <th>Nombre</th>
                <th>Fecha de lanzamiento</th>
                <th>Categoria</th>
                <th>Descripcion</th>
                <th>Portada</th>
            </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->id;?>
 <br> <a class="btnEnD e" href="editView/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id;?>
"><button>Editar</button></a> <a class="btnEnD d" href="deleteGame/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id;?>
"><button>Borrar</button></a></td>
                <td><a href="juego/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['juego']->value->name;?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->release_date;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->categories;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->description;?>
</td>
                <td><img src='<?php echo $_smarty_tpl->tpl_vars['juego']->value->url_img;?>
' alt=""></td>
            </tr>      
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>

<div>
    <h2 class="tituloTable">Agregar un juego a la lista!</h2>
    <form method="post" action="createGame" enctype="multipart/form-data">
        <label>Nombre del juego:</label><input type="text" name="name" required>
        <label>Categoria del juego:</label><select name="categorie">
            <option value="action">Accion</option>
            <option value="adventure">Aventura</option>
            <option value="sport">Deporte</option>
        </select>
        <label>Fecha de lanzamiento:</label><input type="date" name="release_date" required>
        <label>Descripcion:</label><input type="text" name="description" required>
        <label>Posicion:</label><input type="number" name="id" required>
        <label>Adjuntar imagen:</label><input type="file" name="img" required>
        <input type="submit" value="Agregar">
    </form>

</div>



<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
