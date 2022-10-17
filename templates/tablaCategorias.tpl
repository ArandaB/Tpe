{include file="templates/header.php"}
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
                {foreach from=$juegos item=$juego}
                    {if $juego->id_categorie == 1}
                        <a href="juego/{$juego->id}">{$juego->name}</a> -
                    {/if}
                {/foreach}
                </td>
                <td>{foreach from=$juegos item=$juego}
                        {if $juego->id_categorie == 1}
                            {$juego->categorie}
                            {break}
                        {/if}
                {/foreach}
                </td>
                <td>{foreach from=$juegos item=$juego}
                        {if $juego->id_categorie == 1}
                            {$juego->features}
                            {break}
                        {/if}  
                    {/foreach}</td>
            </tr>
            <tr>
                <td>
                {foreach from=$juegos item=$juego}
                    {if $juego->id_categorie == 2}
                        <a href="juego/{$juego->id}">{$juego->name}</a> -
                    {/if}
                {/foreach}
                </td>
                <td>{foreach from=$juegos item=$juego}
                        {if $juego->id_categorie == 2}
                            {$juego->categorie}
                            {break}
                        {/if}
                {/foreach}
                </td>
                <td>{foreach from=$juegos item=$juego}
                        {if $juego->id_categorie == 2}
                            {$juego->features}
                            {break}
                        {/if}  
                    {/foreach}</td>
            </tr>
            <tr>
                <td>
                {foreach from=$juegos item=$juego}
                    {if $juego->id_categorie == 3}
                        <a href="juego/{$juego->id}">{$juego->name}</a> -
                    {/if}
                {/foreach}
                </td>
                <td>{foreach from=$juegos item=$juego}
                        {if $juego->id_categorie == 3}
                            {$juego->categorie}
                            {break}
                        {/if}
                {/foreach}
                </td>
                <td>{foreach from=$juegos item=$juego}
                        {if $juego->id_categorie == 3}
                            {$juego->features}
                            {break}
                        {/if}  
                    {/foreach}</td>
            </tr>
        </tbody>
    </table>
</div>
{include file="templates/footer.html"}