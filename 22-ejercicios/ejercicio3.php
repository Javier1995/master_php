<?php

/**
 * Hacer una calculadora con una interfaz de usuario(formulario) con dos inputs y 4 botones
 * 
 */

 function sumar($valor1, $valor2) {

    if(is_numeric($valor1) && is_numeric($valor2)) {
        $suma = $valor1 + $valor2;
        return $suma;
    } else {
        return "Ingrese valores validos";
    }   
 }


 function resta($valor1, $valor2) {

    if(is_numeric($valor1) && is_numeric($valor2)) {
        $resta = $valor1 - $valor2;
        return $resta;
    } else {
        return "Ingrese valores validos";
    }   
 }


 function division($valor1, $valor2){

    if(is_numeric($valor1) && is_numeric($valor2)) {
        $divide = $valor1 / $valor2;
        return $divide;
    } else {
        return "Ingrese valores validos";
    }   
 }


 function multiplicar($valor1, $valor2) {

    if(is_numeric($valor1) && is_numeric($valor2)) {
        $multiplica = $valor1 * $valor2;
        return $multiplica;
    } else {
        return "Ingrese valores validos";
    }   
 }


 if(isset($_POST['valor1']) && isset($_POST['valor2'])){

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    if(isset($_POST['suma'])){
        $resultado = sumar($valor1, $valor2);
    }
    if(isset($_POST['division'])){
        $resultado = division($valor1, $valor2);
    }
    if(isset($_POST['resta'])){
        $resultado = resta($valor1, $valor2);
    }
    if(isset($_POST['multiplicacion'])){
        $resultado = multiplicar($valor1, $valor2);
    }

 } else {
    $error = "Ingrese correctamente los dos valores";
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
    <?php if(isset($error)): ?>

        <?=  $error; ?>

    <?php endif; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">

        Valor1<input type="text" name="valor1" value="<?php (isset($valor1))? print($valor1): print'' ?>">
        valor2<input type="text" name="valor2" value="<?php (isset($valor2))? print($valor2): print'' ?>">

        <input type="submit" value="suma" name="suma">
        <input type="submit" value="resta" name="resta">
        <input type="submit" value="multi" name="multiplicacion">
        <input type="submit" value="division" name="division">

    </form>

    <?php if(isset($resultado)):?>
        <h1><?= 'EL resultado es '. $resultado?></h1>
    <?php endif;?>

</body>
</html>
