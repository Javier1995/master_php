<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>

    <h1>Tu pedido se ha confirmado</h1>
    <p>
        Tu pedido ha sido guardado con exito, una vez que realice la transferencia bancaria con el coste del pedido,
        será procesado y enviado.

    </p>

    <?php if (isset($pedido)): ?>
        <h3>Datos del pedido:</h3>
        <pre>
                                Numero de pedido: <?= $pedido->id ?>
                                Total a pagar: $ <?= $pedido->coste ?>

                                Productos: 
            <?php while ($producto = $productos->fetch_object()): ?>
                  <ul>
                      <li><?= $producto->nombre ?> - $<?= $producto->precio ?> - x<?= $producto->unidades ?></li>
                  </ul>
            <?php endwhile; ?>
        </pre>
    <?php endif; ?>
<?php else: ?>

    <h1>Tu pedido no ha podido procesarse</h1>

<?php endif; ?>
