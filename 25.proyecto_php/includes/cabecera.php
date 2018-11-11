
<?php require_once 'conexion.php'?>
<?php require_once 'helpers.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Blog de Videojuegos</title>
    <link rel="shortcut icon" href="./assets/img/cubes.png" type="image/png">
</head>
<body>
    <!-- Cabecera-->
    <header id="cabecera">
        <div id="logo">
            <a href="./">
                Blog de VideoJuegos
            </a>
        </div>

     <!-- Menu -->
        <nav id="menu">
            <ul>
                <li><a href="./">Inicio</a></li>
                <?php $categorias = conseguirCategorias();  ?>
                <?php while($categoria = mysqli_fetch_assoc($categorias)) :?>

                <li><a href="categoria.php?id=<?php echo $categoria['id']?>"><?php echo $categoria['nombre']?></a></li>

                <?php endwhile;?>
                <li><a href="http://">Sobre Mí</a></li> 
                <li><a href="http://">Contacto</a></li>
            </ul>    
        </nav>
        <div class="clearfix"></div>
    </header>
    <div id="contenedor">
    