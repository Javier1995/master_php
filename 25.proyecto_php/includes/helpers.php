<?php
function mostrarError($errores, $valor) 
{
    $alerta = '';
    if (isset($errores[$valor]) && !empty($valor)) {

        $alerta = '<p class="errores">'.$errores[$valor].'</p>';

    } 
    return $alerta;
}


function borrarErrores() 
{

 $_SESSION['errores']     = null;
 $_SESSION['respuesta']   = null;
 $_SESSION['error_login'] = null;
 $_SESSION['errores_entradas'] = null;

}

function conseguirCategorias() 
{   global $con;
   
    $sql = "SELECT * FROM categorias ORDER BY id ASC;";
    $categorias =  mysqli_query($con, $sql);
    $result = array();
    if ($categorias && mysqli_num_rows($categorias) >= 1) {
        $result = $categorias;
    } 

    return $result;
}

function conseguirUltimaEntradas() 
{   global $con;
   
    $sql = "SELECT e.*, c.nombre as 'categoria' FROM entradas e ";
    $sql.="INNER JOIN categorias c ON  e.categoria_id = c.id ";
    $sql.="ORDER BY e.id DESC LIMIT 4";
    $ultimaEntradas =  mysqli_query($con, $sql);
    $result = array();
    if ($ultimaEntradas && mysqli_num_rows($ultimaEntradas) >= 1) {
        $result = $ultimaEntradas;
    } 
    
    return $result;
}
