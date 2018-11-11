<!--CABECERA CON INCLUDE PHP -->
<?php require_once './includes/redireccion.php'; ?>
<?php require_once './includes/cabecera.php'; ?>
<!-- sidebar -->
<!--INCLUYE BARRA LATERAL CON PHP -->
<?php require_once './includes/lateral.php';?>
<!-- Caja principal -->
<?php $entrada = getEntrada($_GET['id']);
      $contenido = mysqli_fetch_assoc($entrada);
?>
    <div id="principal">
        <h1><?=$contenido['titulo']?></h1>
        <span class="fecha-entrada"><a href="categoria.php?id=<?=$contenido['categoria_id']?>"><?=$contenido['categoria']?></a> | <?=$contenido['autor'].' '.$contenido['fecha']?></span>
        <p><?=$contenido['descripcion']?></p>

        <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['id']==$contenido['usuario_id']) :?>
            <p><a href="./editar_entrada.php?id=<?=$contenido['id']?>" class="boton btn-info">Editar Entrada</a></p>
            <p><a href="./borrar_entrada.php?id=<?=$contenido['id']?>" class="boton btn-error">Borrar Entrada</a></p>
        <?php endif; ?>
    </div>
    <!-- pie de pagina -->
    <?php include_once './includes/footer.php';?>

    