
<h1>Algunos de nuestros Productos Destacados</h1>

<?php while ($pro = $productos->fetch_object()): ?>
    <div class="product">
        <img src="<?= BASE_URL ?>uploads/images/<?= $pro->imagen ?>" alt="Camista">
        <h2><?= $pro->nombre ?></h2>
        <p>$ <?= $pro->precio ?></p>
        <a href="">Comprar</a>
    </div>
<?php endwhile; ?>
