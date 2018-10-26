<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validación de formularios en PHP</title>
</head>
<body>
    <h1>Validación de formularios en PHP</h1>

    <?php 

        if(isset($_GET['error'])){
            switch($_GET['error']){
                case 'faltan_valores':
                    echo '<strong style="color:red">Llena correctamente los datos del formulario</strong>';
                    break;
                case 'nombre':
                    echo '<strong style="color:red">Llena correctamente nombre del formulario</strong>';
                    break;
                case 'email':
                    echo '<strong style="color:red">Llena correctamente email del formulario</strong>';
                    break;
                case 'edad':
                    echo '<strong style="color:red">Llena correctamente edad del formulario</strong>';
                    break;
                case 'apellido':
                    echo '<strong style="color:red">Llena correctamente apellido del formulario</strong>';
                    break;
                case 'contrasena':
                    echo '<strong style="color:red">Llena correctamente contraseña del formulario</strong>';
                    break;
                default:
                break;
            }
        }
    
    ?>
    <form action="procesar_formulario.php" method="POST">

        <label for="nombre">nombre</label>
        <p><input type="text" name="nombre" id="nombre" required pattern="[a-zA-Z]+"></p>
        <label for="apellido">Apellido</label>
        <p><input type="text" name="apellido" id="apellido" required pattern="[a-zA-Z]+"></p>
        <label for="edad">Edad</label>
        <p><input type="number" name="edad" id="edad" required></p>
        <label for="email">Email</label>
        <p><input type="text" name="email" id="email" required></p>
        <label for="contrasena">Contraseña</label>
        <p><input type="password" name="contrasena" id="contrasena" required></p>
        <input type="submit" value="enviar">
    </form>
</body>
</html>