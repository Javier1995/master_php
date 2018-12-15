
<h1>Listado de notas</h1>

<?php  while($nota = $notas->fetch_assoc()):?>

    <ul>
        <li><?=$nota['titulo'];?></li>
        <li><?=$nota['descripcion']?></li>
        <li><?=$nota['fecha']?></li>

    </ul>


<?php endwhile;?>