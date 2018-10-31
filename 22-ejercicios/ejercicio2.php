<?php

/**
 * 1. Funcion 
 * 2.Validar un email con filter.
 * 3.Recoger variable por get y validarla
 * 4.Mostrar el resultado
 * 
 */

 function validarEmail($email){
   
    if(!empty($email)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return "<strong style=\"color:green\">El email $email es correcto</strong>";
        } else {
            return "<strong style=\"color:red\">El email introducido es incorrecto</strong>";
        }
    } else {
        return "<strong style=\"color:red\">No ha introducido ningun email</strong>";
    }

 }


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Valida email</title>
</head>
<body>

    <h1>Valiacion de Email</h1>
    <?php if(isset($_GET['email'])): ?>

        <?= validarEmail($_GET['email']) ?>

    <?php endif; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">

        Email<input type="text" name="email" id="email">
        <input type="submit" value="Enviar">
    
    </form>
</body>
</html>
