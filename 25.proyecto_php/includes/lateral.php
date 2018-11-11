
<aside id="sidebar">
<?php if (isset($_SESSION['usuario'])) : ?>
    <div id="usuario_logueado" class="bloque">
        <h3><?= 'Hola, '.$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']?></h3>
        
        <a href="./crear_entrada.php" class="boton btn-info">Crear entradas</a>
        <a href="./crear_categoria.php" class="boton btn-info">Crear categorias</a>
        <a href="./logout.php" class="boton btn-info"><i class="medium material-icons">person</i></a>
        <a href="./logout.php" class="boton btn-error"><i class="large material-icons">close</i> </a>
    </div>    
<?php endif;?>

<?php if (!isset($_SESSION['usuario'])) :  ?>
    <div id="login.php" class="bloque">
        <h3>Login</h3>
        <form action="login.php" method="POST">
        
            <label for="email">Email</label>
            <input type="email" name="email" id="email">

            <label for="password">password</label>
            <input type="password" name="password" id="password">
            <?php if (isset($_SESSION['error_login'])) :  ?>
            <p class="errores"><?=$_SESSION['error_login']?></p>
            <?php endif;?>
            <input type="submit" value="Entrar" />
        </form>
    </div>



    <div id="register" class="bloque">
        <h3>Indentificate</h3>
        <?php if (isset($_SESSION['respuesta'])) :?>
            <p class="exito"><?= $_SESSION['respuesta'];?></p>

        <?php elseif(isset($_SESSION['errores']['general'])) :?>
            <p class="errores"><?= $_SESSION['errores']['general'];?></p>
        <?php endif;?>


        <form action="registro.php" method="post">
            <label for="newnombre">Nombre</label>
            <input type="text" name="newnombre" id="newnombre">
            <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'], 'nombre'): '';?>
            
            <label for="newapellido">Apellido</label>
            <input type="text" name="newapellido" id="newapellido">
            <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'], 'apellidos'): '';?>
            
            <label for="newemail">Email</label>
            <input type="email" name="newemail" id="newemail">
            <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'], 'email'): '';?>
            
            <label for="newpassword">Password</label>
            <input type="password" name="newpassword" id="newpassword">
            <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'], 'password'): '';?>
            
            <input type="submit" value="Registrar" name="submit" />
        </form>
        <?php  borrarErrores();?>


    </div>
    <?php endif;?>
</aside>
