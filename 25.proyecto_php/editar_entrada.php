<?php require_once './includes/redireccion.php'; ?>
<?php require_once './includes/cabecera.php'; ?>
<!-- sidebar -->
<!--INCLUYE BARRA LATERAL CON PHP -->
<?php require_once './includes/lateral.php';?>

<?php $entrada = getEntrada($_GET['id']);
      $contenido = mysqli_fetch_assoc($entrada);
      if (!isset($contenido['id'])) {
          header("Location:./");
      }
 
?>
<!--CABECERA CON INCLUDE PHP -->
<?php require_once './includes/redireccion.php'; ?>
<?php require_once './includes/cabecera.php'; ?>
<!-- sidebar -->
<!--INCLUYE BARRA LATERAL CON PHP -->
<?php require_once './includes/lateral.php';?>
<!-- Caja principal -->
    <div id="principal">
    
        <h1>Editar entrada</h1>
        <p>Edita entradas al blog para que los usuarias puedan leerlas</p>
        <br>
            <form action="guardar_entradas.php?editar=1&id=<?=$contenido['id']?>" method="POST">

                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" value="<?=$contenido['titulo']?>">
                <?php echo isset($_SESSION['errores_entradas'])? mostrarError($_SESSION['errores_entradas'], 'titulo'): '';?>
                <label for="categoria">Categoria</label>
                <?php $categories = conseguirCategorias(); ?>

                <select name="categoria" id="categoria">

                    <?php 
                    if (!empty($categories)) : ?>
                        <option value="0" selected disabled>SELECCIONAR</option>
                    <?php while($category = mysqli_fetch_assoc($categories)) : ?>
                            <?php if ($category['id'] == $contenido['categoria_id']) :?>
                             <option selected value="<?= $category['id']?>"><?= $category['nombre']?></option>
                            <?php else :?>
                             <option value="<?= $category['id']?>"><?= $category['nombre']?></option>
                            <?php endif;?>
                    <?php endwhile;?>

                    <?php else: ?>
                            <option value="0" disabled>No hay ninguna</option>
                    <?php endif; ?>


                </select>
                <?php echo isset($_SESSION['errores_entradas'])? mostrarError($_SESSION['errores_entradas'], 'categoria'): '';?>
                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" id="descripcion" cols="101" rows="20"><?=$contenido['descripcion']?></textarea>
                <?php echo isset($_SESSION['errores_entradas'])? mostrarError($_SESSION['errores_entradas'], 'descripcion'): '';?>
                <input type="submit" class="boton btn-info">
            <?php borrarErrores();?>
            </form>

    </div>
    <!-- pie de pagina -->
    <?php include_once './includes/footer.php';?>