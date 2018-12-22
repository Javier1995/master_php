<?php if (isset($pro) && filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)): ?>

    <h1><?= $pro->nombre; ?></h1>
    <div class="detail">
        <img src="<?= BASE_URL ?>uploads/images/<?= $pro->imagen ?>" class="img-detalle" alt="Camista">

        <div class="descripcion">
            <h2>Descripción</h2>
            <p><?= $pro->descripcion ?></p>
        </div>
        <p class="precio-detalle">Precio $<?= $pro->precio ?></p>
        <a href="<?= BASE_URL ?>car/add&id=<?= $pro->id ?>" class="button btn-large">Comprar</a>
    </div>

<?php else: ?>
    <h1>El producto no existe</h1>
<?php endif; ?>

