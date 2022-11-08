{include file="templates/header.php"}



<h1 class="tituloTable">{$titulo}</h1>
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
        {foreach from=$juegos item=$juego}
            <tr>
                <td>
                    {$juego->id} <br>
                    {if $user == 1}
                        <a class="btnEnD e" href="editView/{$juego->id}"><button>Editar</button></a>
                        <a class="btnEnD d" href="deleteGame/{$juego->id}"><button>Borrar</button></a> 
                    {/if}    
                </td>
                <td><a href="juego/{$juego->id}">{$juego->name}</a></td>
                <td>{$juego->release_date}</td>
                <td>{$juego->categories}</td>
                <td>{$juego->description}</td>
                <td><img src='{$juego->url_img}' alt=""></td>
            </tr>      
        {/foreach}
    </table>
</div>

<div>
    {if $user == 1}
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
    {/if}
</div>



{include file="templates/footer.html"}

