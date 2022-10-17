
<h4 class="tituloTable">Editar juego numero: {$id}</h4>
<form action="editGame/{$id}" method="post">
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
