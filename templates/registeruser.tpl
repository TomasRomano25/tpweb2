{include file="templates/header.tpl"}
    <div class="container col-4 mt-5">

        <form action="insertarusuarios" method="POST">

            <div class="form-group">
                <h1> CREAR CUENTA </h1>
            </div>
            <div class="form-group">
                <p>Nombre de usuario</p>
            <input type="text" name="insertarusuario">
            </div>
            <div class="form-group ">
                <p>Email</p>
                <input type="email" name="insertaremail">
            </div>
            <div class="form-group ">
                <p>Contraseña</p>
                <input type="password" name="insertarcontraseña">
            </div>

        <button type="submit" class="btn btn-primary" >Crear</button>
        </form>
 
        
    </div>

    {include file="templates/footer.tpl"}
    