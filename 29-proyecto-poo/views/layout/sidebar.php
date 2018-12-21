<aside class="lateral">
    <div id="login" class="block_aside">
        <?php if (!isset($_SESSION['identity'])): ?>
            <h3>Entrar a la web</h3>
            <form action="<?= BASE_URL ?>usuario/login" method="post">
                <label for="email">Email</label>
                <input type="email" name="email" autocomplete="off" autofocus="on">
                <label for="password">Password</label>
                <input type="password" name="password" autocomplete="off">
                <button class="button btn-large" type="submit" value="enviar">Log in</button>

            </form>
            <a class="button btn-large" href="<?= BASE_URL ?>usuario/logup">Log up</a>
        <?php else: ?>
            <h3><?= $_SESSION['identity']->nombre . ' ' . $_SESSION['identity']->apellidos ?></h3>
            <ul>

                <?php if (isset($_SESSION['admin'])): ?>
                    <li><a href="<?= BASE_URL ?>category/index"><i class="material-icons">vpn_key</i>Gestionar Categorias</a></li>
                    <li><a href="<?= BASE_URL ?>products/gestion"><i class="material-icons">home</i>Gestionar Productos</a></li>
                    <li><a href="./"><i class="material-icons">home</i>Gestionar Pedidos</a></li>
                <?php else: ?>  
                    <li><a href="./"><i class="material-icons">person</i>Mis pedidos</a></li>
                <?php endif; ?>

                <li><a href="<?= BASE_URL ?>usuario/logout"><i class="material-icons">close</i>Cerrar sesión</a></li>

            </ul>

        <?php endif; ?>


    </div>
</aside>
<!--CONTENIDO CENTRAL-->

<div id="central">