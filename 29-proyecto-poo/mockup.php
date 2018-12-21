<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tienda de camisetas</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        <link rel="stylesheet" href="assets/css/styles.css"/>
    </head>
    <body>
        
        <div class="container">
        <!--CABECERA -->
        <header id="header">
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="Camiseta Logo">
                <a href="./">
                    Tienda de Camisetas
                </a>
            </div>
        </header>
        <!--MENU -->
        <nav id="menu">
            <ul>
                <li><a href="./">  Inicio</a></li>
                <li><a href="./">Categoria 1</a></li>
                <li><a href="./">Categoria 2</a></li>
                <li><a href="./">Categoria 3</a></li>
            </ul>

        </nav>
        <!--BARRA LATERAL-->

        <div class="content">
            <aside class="lateral">
                <div id="login" class="block_aside">
                    <h3>Entrar a la web</h3>
                    <form action="#" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email" autocomplete="off" autofocus="on">
                        <label for="password">Password</label>
                        <input type="password" name="password" autocomplete="off">
                        <button type="submit" value="enviar">Entrar</button>
                    </form>

                    <ul>
                        <li><a href="./"><i class="material-icons">person</i>Mis productos</a></li>
                        <li><a href="./"><i class="material-icons">vpn_key</i>Gestionar Categorias</a></li>
                        <li><a href="./"><i class="material-icons">home</i>Gestionar Productos</a></li>

                    </ul>





                </div>
            </aside>
            <!--CONTENIDO CENTRAL-->

            <div id="central">
                <h1>Productos Destacados</h1>
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="">
                    <h2>Camiseta azul Ancha</h2>
                    <p>$ 30</p>
                    <a href="">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="">
                    <h2>Camiseta azul Ancha</h2>
                    <p>$ 30</p>
                    <a href="">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="">
                    <h2>Camiseta azul Ancha</h2>
                    <p>$ 30</p>
                    <a href="">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="">
                    <h2>Camiseta azul Ancha</h2>
                    <p>$ 30</p>
                    <a href="">Comprar</a>
                </div>
            </div>
        </div>
        <!--PIE DE PÁGINA-->
        <footer>Desarrollado por Javier Quiroga Almeida &copy; <?= date('Y') ?></footer>
        </div>
    </body>
</html>

