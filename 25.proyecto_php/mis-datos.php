<!--CABECERA CON INCLUDE PHP -->
<?php require_once './includes/redireccion.php'; ?>
<?php require_once './includes/cabecera.php'; ?>
<!-- sidebar -->
<!--INCLUYE BARRA LATERAL CON PHP -->
<?php require_once './includes/lateral.php';?>
<!-- Caja principal -->

<div id="principal">
    <h1>Mis datos</h1>
    <p>Añade nuevas categorias al blog para que los usuarias puedan crearlas en sus entradas</p>
    <br>
    <?php echo isset($_SESSION['respuesta'])? mostrarError($_SESSION['respuesta'], 'exito'): '';?>
    <?php echo isset($_SESSION['respuesta'])? mostrarError($_SESSION['respuesta'], 'error'): '';?>
        <form action="actualizar_dato.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?=$_SESSION['usuario']['nombre']?>">
            <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'], 'nombre'): '';?>

            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido"  value="<?=$_SESSION['usuario']['apellidos']?>">
            <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'], 'apellidos'): '';?>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?=$_SESSION['usuario']['email']?>">
            <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'], 'email'): '';?>
       
            <input type="submit" value="Actualizar" name="submit" />
        </form>
        <?php borrarErrores();?>
    

</div><!-- pie de pagina -->
<?php include_once './includes/footer.php';?>