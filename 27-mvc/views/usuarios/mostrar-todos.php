
<?php while($usuario = $usuarios->fetch_object()):?>
    <ul>
        <li><?=$usuario->nombre?></li>
        <li><?=$usuario->apellidos?></li>
    </ul>

<?php endwhile; ?>




