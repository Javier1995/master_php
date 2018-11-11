<?php
function mostrarError($errores, $valor) 
{
    $alerta = '';
    if (isset($errores[$valor]) && !empty($valor)) {

        $alerta = '<p class="errores">'.$errores[$valor].'</p>';

    } 

    if (isset($errores[$valor]) && $valor == 'exito' && !empty($valor)) {

        $alerta = '<p class="exito">'.$errores[$valor].'</p>';

    } 
    if (isset($errores[$valor]) && $valor == 'error' && !empty($valor)) {

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



function getEntrada($id) 
{   global $con;
   
    $sql = "SELECT e.*, c.nombre as 'categoria', c.id AS 'id_categoria', u.nombre AS 'autor' FROM entradas e ";
    $sql.=" INNER JOIN categorias c ON  e.categoria_id = c.id ";
    $sql.=" INNER JOIN usuarios u ON u.id  = e.usuario_id ";
    $sql.="WHERE e.id = '$id'";
    $entrada =  mysqli_query($con, $sql);
    $result = array();
    if ($entrada && mysqli_num_rows($entrada) >= 1) {
        $result = $entrada;
    } 
    
    return $result;
}

function conseguirEntradas($limit=null, $busqueda = null) 
{   global $con;
   
    $sql = "SELECT e.*, c.nombre as 'categoria' FROM entradas e ";
    $sql.="INNER JOIN categorias c ON  e.categoria_id = c.id ";
    if (!empty($busqueda)) {
        $sql.= " WHERE e.titulo LIKE '%$busqueda%'";
    }
    
    $sql.=" ORDER BY e.id DESC ";
   
    if ($limit) {
        $sql.= " LIMIT 4";
    }
    $entradas =  mysqli_query($con, $sql);
    $result = array();
    if ($entradas && mysqli_num_rows($entradas) >= 1) {
        $result = $entradas;
    } 
    
    return $result;
}


function conseguirCatNombre($id) 
{   global $con;
   
    $sql = "SELECT * FROM categorias WHERE id = $id";
    $categoria =  mysqli_query($con, $sql);
    $result = array();
    if ($categoria && mysqli_num_rows($categoria) >= 1) {
        $result = mysqli_fetch_assoc( $categoria );
    } 

    return $result;
}


function conseguirCategoria($categoria_id) 
{   global $con;
   
    $sql = "SELECT c.nombre as 'categoria', u.nombre , e.id AS 'entrada_id', e.titulo AS 'titulo' , e.descripcion AS 'descripcion', e.fecha AS 'fecha' FROM entradas e ";
    $sql.= " RIGHT JOIN categorias c ON e.categoria_id = c.id ";
    $sql.= " RIGHT JOIN usuarios u ON u.id  = e.usuario_id ";
    $sql.= " WHERE c.id = $categoria_id";
    $categoria =  mysqli_query($con, $sql);
    $result = array();
    if ($categoria) {
        $result = $categoria;
    } 

    return $result;
}