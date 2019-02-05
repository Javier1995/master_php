<?php if (isset($_SESSION['identity'])): ?>

    <h1>Hacer pedido</h1>
    <a href="<?= BASE_URL . 'car/index' ?>">Ver los productos y el precio del pedido</a>
    <h3>Direccion para el envio: </h3>
    <form action="<?= BASE_URL . 'pedido/add' ?>" method="POST">
        
        <label for="provincia">Provincia</label>
        <input type="text" name="provincia" required=""/>
        
        <label for="localidad">Localidad</label>
        <input type="text" name="localidad" required/>
        
         <label for="direccion">Dirección</label>
         <input type="text" name="direccion" required=""/>
        <button type="submit" class="button">Confirmar Pedido</button>
    </form>
<?php else: ?>
    <h1>Necesita esta identificado</h1>
    <p>Necesitas registrar o acceder al portal para realizar la compra</p>
<?php endif; ?>
