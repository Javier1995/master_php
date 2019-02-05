
<?php if (isset($_SESSION['car'])): ?>
    <h1>Carrito de la compra</h1>
    <table>
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Unidades</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION['car'] AS $index => $element): ?> 
                <tr>
                    <td>

                        <img style="width:100px; height:100px;" src="<?= BASE_URL . 'uploads/images/' . $_SESSION['car'][$index]['producto']->imagen; ?>" alt="Camista">
                    </td>
                    <td><a href="<?= BASE_URL . 'products/show&id=' . $element['producto']->id ?>"><?= $element['producto']->nombre; ?></a></td>
                    <td><?= number_format($element['precio'], 2) ?></td>
                    <td><?= $element['unidad'] ?></td>


                </tr>


            <?php endforeach; ?>
        </tbody>

    </table>
    <div class="cart-total">
        <?php $stats = Utils::statsCart(); ?>
        <h3 class="price-text">Precio total: $ <?= number_format($stats['total'], 2) ?></h3>
        <a href="<?=BASE_URL.''?>pedido/hacer" class="button btn-pedidos ">Hacer pedido</a>
    </div>

<?php else: ?>
    <p>No hay productos en el carrito actualmente</p>
<?php endif; ?>