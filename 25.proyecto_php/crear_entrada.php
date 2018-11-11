<!--CABECERA CON INCLUDE PHP -->
<?php require_once './includes/redireccion.php'; ?>
<?php require_once './includes/cabecera.php'; ?>
<!-- sidebar -->
<!--INCLUYE BARRA LATERAL CON PHP -->
<?php require_once './includes/lateral.php';?>
<!-- Caja principal -->

    <div id="principal">
    
        <h1>Crear entradas</h1>
        <p>Añade nuevas entradas al blog para que los usuarias puedan leerlas</p>
        <br>
            <form action="guardar_entradas.php" method="POST">

                <label for="titulo">Titulo</label>
                <input type="text" name="titulo">
                <?php echo isset($_SESSION['errores_entradas'])? mostrarError($_SESSION['errores_entradas'], 'titulo'): '';?>
                <label for="categoria">Categoria</label>
                <?php $categories = conseguirCategorias(); ?>

                <select name="categoria" id="categoria">

                    <?php 
                    if (!empty($categories)) : ?>
                        <option value="0" selected disabled>SELECCIONAR</option>
                    <?php while($category = mysqli_fetch_assoc($categories)) : ?>
                    
                            <option value="<?= $category['id']?>"><?= $category['nombre']?></option>
                    <?php endwhile;?>

                    <?php else: ?>
                            <option value="0" disabled>No hay ninguna</option>
                    <?php endif; ?>


                </select>
                <?php echo isset($_SESSION['errores_entradas'])? mostrarError($_SESSION['errores_entradas'], 'categoria'): '';?>
                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" id="descripcion" cols="101" rows="20"></textarea>
                <?php echo isset($_SESSION['errores_entradas'])? mostrarError($_SESSION['errores_entradas'], 'descripcion'): '';?>
                <input type="submit" class="boton btn-info">
            <?php borrarErrores();?>
            </form>

    </div>
    <!-- pie de pagina -->
    <?php include_once './includes/footer.php';?>