<?php if (isset($category)): ?>
    <h1><?= $cat->nombre; ?></h1>
    <?php if ($products->num_rows == 0): ?>
        <p>No hay productos para mostrar de esta categoria</p>
    <?php endif; ?>

    <?php while ($pro = $products->fetch_object()): ?>
        <div class="product">
            <a href="<?= BASE_URL ?>Products/show&id=<?= $pro->id ?>">
                <img src="<?= BASE_URL ?>uploads/images/<?= $pro->imagen ?>" alt="Camista">
                <h2><?= $pro->nombre ?></h2>
            </a>
            <p>$<?= $pro->precio ?></p>
            <a href="<?= BASE_URL ?>car/add&id=<?= $pro->id ?>">Comprar</a>
        </div>
    <?php endwhile; ?>


<?php else: ?>
    <h1>La categoria no existe</h1>
<?php endif; ?>

