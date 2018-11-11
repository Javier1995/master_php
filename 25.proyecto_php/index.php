<!--CABECERA CON INCLUDE PHP -->

<?php require_once './includes/cabecera.php'; ?>
<!-- sidebar -->
<!--INCLUYE BARRA LATERAL CON PHP -->
<?php require_once './includes/lateral.php';?>
    <!-- Caja principal -->

    <div id="principal">
        <?php $entradas = conseguirUltimaEntradas();
        if(!empty($entradas)) :
         while($entrada = mysqli_fetch_assoc($entradas) ) :
        ?>
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
        <?php 
         endwhile;
        endif;
        ?>

        <div id="ver-todas">
            <a href="">Ver todas las entradas</a>
        </div>

    </div>
    <!-- pie de pagina -->
    <?php include_once './includes/footer.php';?>