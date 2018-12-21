<h1>Gestionar Categorias</h1>
<a href="<?=BASE_URL?>category/create" class="button">
    Crear Categoria
</a>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($cat = $categories->fetch_object()): ?> 
            <tr>
                <td><?= $cat->id; ?></td>
                <td><?= $cat->nombre; ?></td>
            </tr>


        <?php endwhile; ?>
    </tbody>

</table>
