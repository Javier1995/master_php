

<?php 
if (!$_POST['busqueda']) { 
    header("Location:./");
}
?>

<!--CABECERA CON INCLUDE PHP -->

<?php require_once './includes/cabecera.php'; ?>
<!-- sidebar -->
<!--INCLUYE BARRA LATERAL CON PHP -->
<?php require_once './includes/lateral.php';?>
    <!-- Caja principal -->

    <div id="principal">
        <h1>Busqueda: <?=$_POST['busqueda']?></h1>
        <?php $entradas = conseguirEntradas(false, $_POST['busqueda']); ?>
        <?php if(!empty($entradas) && mysqli_num_rows($entradas)) :?> 
                <?php while($entrada = mysqli_fetch_assoc($entradas) ) :?>
               
            
                    <article class="entrada">
                        <a href="entrada.php?id=<?= $entrada['id']?>">
                            <h2><?= $entrada['titulo']?></h2>
                            <span class="fecha-entrada"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                            <?php if (strlen($entrada['descripcion']) >= 200) : ?>
                            <p><?=substr($entrada['descripcion'], 0, 200).'...';?></p>
                            <?php else:?>
                            <p><?=$entrada['descripcion'];?></p>
                            <?php endif;?>
                        
                        </a>
                    </article>
                <?php endwhile;?>

        <?php else :?>
            <h3>No hay articulo para esta categoria</h3>
        <?php endif;?>

    </div>
    <!-- pie de pagina -->
    <?php include_once './includes/footer.php';?>

