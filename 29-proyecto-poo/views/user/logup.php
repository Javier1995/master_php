<h1>Registrarse</h1>

<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
    <span class="alert-success">Registro Completado correctamente</span>

<?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>

    <span class="alert-error">Registro Fallido, introduce bien los datos</span>


<?php endif; ?>

<?php Utils::deleteSession('register'); ?>
<form action="<?= BASE_URL ?>usuario/save" method="POST">

    <label for="name">Name</label>
    <input type="text" name="name" required>

    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" required>

    <label for="email">Email</label>
    <input type="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" name="password" required> 

    <input type="submit" value="Log up">

</form>