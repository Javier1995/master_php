<?php

if (isset($_POST)) {
    require_once 'includes/conexion.php';
    $titulo    = isset($_POST['titulo'])? mysqli_escape_string($con, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion'])? mysqli_escape_string($con, $_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria'])? (int)$_POST['categoria'] : false;
    $usuario   = $_SESSION['usuario']['id'];
    $errores = array();


  if (empty($titulo)) {

    $errores['titulo'] = "El titulo no es valido";

  } 

  if (empty($descripcion)) {

    $errores['descripcion'] = "La descripcion no es valida";

  } 

  if (empty($categoria) && !is_numeric($categoria)) {

    $errores['categoria'] = "La categoria no es valida";

  } 

 

  if(count($errores)==0) {

    $sql = "INSERT INTO entradas VALUES(NULL, $usuario, $categoria, '$titulo', '$descripcion', CURDATE());";
    $guardar = mysqli_query($con, $sql);
    

  } else {
   #endregion
   $_SESSION['errores_entradas'] = $errores;
   header("Location:./crear_entrada.php");
   exit;
  }


}

header("Location:./");

