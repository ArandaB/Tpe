{include file="templates/header.php"}

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
<h2 class="tituloTable">{$error}</h2>
{include file="templates/footer.html"}