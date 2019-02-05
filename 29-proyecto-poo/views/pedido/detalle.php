<h1>Detalle del pedido</h1>
<?php if (isset($pedidos)): ?>

    <?php if (isset($_SESSION['admin'])): ?>
        <h3>Cambiar estado del pedido:</h3>

        <form action="<?= BASE_URL ?>pedido/estado" method="POST">
            <input type="hidden" value="<?=$pedidos->id?>" name="pedido_id">
            <select name="" id="">
                <option value="confirm">Pediente</option>
                <option value="preparation">En Preparación</option>
                <option value="ready">Preparado para enviar</option>
                <option value="sent">Enviado</option>
            </select>

            <input type="submit" value="Cambiar Estado">
        </form>

    <?php endif; ?>


    <h3>Direccion de envío</h3>

    <pre>
                      Provincia: <?= $pedidos->provincia ?><br>
                      Ciudad: <?= $pedidos->localidad ?><br>
                      Direccion: <?= $pedidos->direccion ?><br>

    </pre>
    <h3>Datos del pedido:</h3>
    <pre>             Estado: <?= Utils::showEstado($pedidos->estado)?><br>
                      Numero de pedido: <?= $pedidos->id ?><br>
                      Total a pagar: $ <?= $pedidos->coste ?><br>
                      Productos: 
    </pre>

    <?php while ($producto = $productos->fetch_object()): ?>
        <ul>
            <li><?= $producto->nombre ?> - $<?= $producto->precio ?> - x<?= $producto->unidades ?></li>
        </ul>
    <?php endwhile; ?>



<?php endif; ?>