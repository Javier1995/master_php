<h1>Gestion de productos</h1>



<a href="<?= BASE_URL ?>products/create" class="button">
    Crear Producto
</a>

<?php if (isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
    <span class="alert-success">Registro Completado correctamente</span>

<?php elseif (isset($_SESSION['producto']) && $_SESSION['producto'] == 'failed'): ?>

    <span class="alert-error">Registro Fallido, introduce bien los datos</span>


<?php endif; ?>

<?php Utils::deleteSession('producto'); ?>
<?php if (isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
    <span class="alert-success">Registro Eliminado correctamente</span>

<?php elseif (isset($_SESSION['delete']) && $_SESSION['delete'] == 'failed'): ?>

    <span class="alert-error">Eliminacion falló, intente de nuevo</span>


<?php endif; ?>

<?php Utils::deleteSession('delete'); ?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>ACCIONES</th>

        </tr>
    </thead>
    <tbody>
        <?php while ($pro = $productos->fetch_object()): ?> 
            <tr>
                <td><?= $pro->id; ?></td>
                <td><?= $pro->nombre; ?></td>
                <td><?= $pro->precio; ?></td>
                <td><?= $pro->stock; ?></td>

                <td>
                    <a href="<?= BASE_URL ?>products/edit&id=<?= $pro->id; ?>" class="button btn-small blue">Editar</a>
                    <a href="<?= BASE_URL ?>products/delete&id=<?= $pro->id; ?>" class="button btn-small red">Borrar</a>
                </td>

            </tr>


        <?php endwhile; ?>
    </tbody>

</table>
