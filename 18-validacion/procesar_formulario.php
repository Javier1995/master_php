<?php
$error = 'faltan_valores';
    if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['contrasena']) && !empty($_POST['edad']) ){
        $error = 'okay';

        $nombre     = $_POST['nombre'];
        $apellido   = $_POST['apellido'];
        $email      = $_POST['email'];
        $contrasena = $_POST['contrasena'];
        $edad       = (int)$_POST['edad'];



        //validar el nombre
        if(!is_string($nombre) || preg_match("/[0-9]/", $nombre)) {
            $error = 'nombre';
        }

        //validar el apellido
        if(!is_string($apellido) || preg_match("/[0-9]/", $apellido)) {
            $error = 'apellido';
        }
        
        if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
            $error = 'edad';
        }

        if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = 'email';
        }

        if(empty($contrasena) || strlen($contrasena) < 5 ){
            $error = 'contrasena';
        }
    
    /* var_dump($_POST, $error);
    die(); */




    } else {

        $error = 'faltan_valores';
    }


    if($error != 'okay'){
        header("Location:index.php?error=$error");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Datos validados correctamente</h1>
    <?php if($error == 'okay'): ?>

       <p> <?= $nombre?> </p>
       <p><?= $apellido?></p>
       <p><?= $edad?></p>
       <p><?= $email?></p>
       <p><?= $contrasena?></p>

    <?php endif; ?>
</body>
</html>


