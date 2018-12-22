
<h1>Algunos de nuestros Productos Destacados</h1>

<?php while ($pro = $productos->fetch_object()): ?>
    <div class="product">
        <a href="<?= BASE_URL ?>Products/show&id=<?= $pro->id ?>">
            <img src="<?= BASE_URL ?>uploads/images/<?= $pro->imagen ?>" alt="Camista">
            <h2><?= $pro->nombre ?></h2>
        </a>
        <p>$<?= $pro->precio ?></p>
        <a href="<?= BASE_URL ?>car/add&id=<?= $pro->id ?>">Comprar</a>
    </div>
<?php endwhile; ?>
