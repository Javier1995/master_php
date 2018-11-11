<!--CABECERA CON INCLUDE PHP -->
<?php require_once './includes/redireccion.php'; ?>
<?php require_once './includes/cabecera.php'; ?>
<!-- sidebar -->
<!--INCLUYE BARRA LATERAL CON PHP -->
<?php require_once './includes/lateral.php';?>
<!-- Caja principal -->

    <div id="principal">
        <h1>Crear Categorias</h1>
        <p>Añade nuevas categorias al blog para que los usuarias puedan crearlas en sus entradas</p>
        <br>
            <form action="guardar_categoria.php" method="POST">

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">
                <input type="submit" class="boton btn-info">

            </form>

    </div>
    <!-- pie de pagina -->
    <?php include_once './includes/footer.php';?>