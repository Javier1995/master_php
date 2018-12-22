
<?php if (isset($edit) && $edit && isset($productos) && is_object($productos)): ?>
    <h1>Editar producto <?= $productos->nombre; ?></h1>
    <?php $url_action = BASE_URL . "products/save&id=" . $productos->id; 
          $button_name = "Update";
    ?>
<?php else: ?>   
    <h1>Crear nuevos productos</h1>
    <?php $url_action = BASE_URL . "products/save";
           $button_name = "Save";        
    ?>
<?php endif; ?>
<form action="<?= $url_action ?>" method="POST" enctype="multipart/form-data">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="<?= isset($edit) ? $productos->nombre : ''; ?>">

    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion"><?= isset($edit) ? $productos->descripcion : ''; ?></textarea>

    <label for="precio">Precio</label>
    <input type="text" name="precio" value="<?= isset($edit) ? $productos->precio : ''; ?>">

    <label for="stock">Stock</label>
    <input type="number" name="stock" value="<?= isset($edit) ? $productos->stock : ''; ?>">

    <label for="categoria">Categoria</label>
    <?php $categorias = Utils::ShowCategories(); ?>
    <select name="categoria" id="categoria">
        <?php while ($categoria = $categorias->fetch_object()): ?>
            <option value="<?= $categoria->id ?>" <?= (isset($edit) && $productos->categoria_id == $categoria->id) ? "selected" : ""; ?>><?= $categoria->nombre ?></option>
        <?php endwhile; ?>
    </select>

    <label for="image">Imagen</label>
    <?php if (isset($edit) && !empty($productos->imagen)): ?>
        <img src="<?= isset($edit) ? BASE_URL . "uploads/images/" . $productos->imagen : ''; ?>" alt="Foto" class="img-producto">
    <?php endif; ?>
    <input  type="file" name="image">
    <button class="button" type="submit"><?=$button_name?></button>

</form>