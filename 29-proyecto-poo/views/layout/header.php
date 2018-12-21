<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tienda de camisetas</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">
        <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/styles.css"/>
    </head>
    <body>

        <div class="container">
            <!--CABECERA -->
            <header id="header">
                <div id="logo">
                    <img src="<?= BASE_URL ?>assets/img/camiseta.png" alt="Camiseta Logo">
                    <a href="./">
                        Tienda de Camisetas
                    </a>
                </div>
            </header>
            <!--MENU -->
            <nav id="menu">
                <ul>
                    <?php $categorias = Utils::ShowCategories(); ?>
                    <li><a href="<?= BASE_URL ?>">Inicio</a></li>
                    <?php while ($category = $categorias->fetch_object()): ?>
                        <li><a href="../"><?= $category->nombre ?></a></li>
                    <?php endwhile; ?>
                </ul>

            </nav>
            <!--BARRA LATERAL-->

            <div class="content">