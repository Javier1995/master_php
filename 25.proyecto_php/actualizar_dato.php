
<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   CategoryName
 * @package    PackageName
 * @author     Original Author <author@example.com>
 * @author     Another Author <another@example.com>
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */

/**
 * This is a "Docblock Comment," also known as a "docblock."  The class'
 * docblock, below, contains a complete description of how to write these.
 */
if ($_SERVER['REQUEST_METHOD']== 'POST') {
    require_once './includes/conexion.php';

    //Recoger los valores del formulario deactulizacion
    $nombre    = isset($_POST['nombre'])? mysqli_real_escape_string($con, htmlentities($_POST['nombre'])):  false ;
    $apellidos = isset($_POST['apellido'])? mysqli_real_escape_string($con, htmlentities($_POST['apellido'])) : false ;
    $email     = isset($_POST['email'])? mysqli_real_escape_string($con, htmlentities($_POST['email'])): false;
    $id   = $_SESSION['usuario']['id'];
    //validar los datos antes de guardarlos en la base de datos
    $errores = array();
    //validación de campo nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = 'El nombre no es valido';
    }
    //validación de campo apellidos
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellidos_validado = true;
    } else {
        $apellidos_validado = false;
        $errores['apellidos'] = 'Los apellidos no es valido';
    }
    //validación de campo email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $apellidos_validado = true;
    } else {
        $apellidos_validado = false;
        $errores['email'] = 'El email no es valido';
    }
    $guardar_usuario = false;
    if (count($errores) == 0) {

        $guardar_usuario = true;

        //COMPROBAR SI EL EMAIL YA EXISTE
        $querySelect =  "SELECT * FROM usuarios WHERE email = '$email'";
        $isset_email = mysqli_query($con, $querySelect);
        $isset_user  = mysqli_fetch_assoc($isset_email); 
        if ($isset_user['id'] == $id || empty($isset_user)) {
            //UPDATE NEW USER
            $queryUpdate = "UPDATE usuarios SET nombre ='$nombre', "; 
            $queryUpdate.= "apellidos = '$apellidos', email = '$email' "; 
            $queryUpdate.= " WHERE id = '$id'";
            $resultado   = mysqli_query($con, $queryUpdate);
            if ($resultado) {
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;
                $_SESSION['respuesta']['exito'] = 'Tus datos se han actualizado correctamente';

            } else {

                $_SESSION['errores']['general'] = 'Fallo al actualizar tus datos';
            }
        } else {
            $_SESSION['respuesta']['error'] = 'El email ya existe';
            var_dump($_SESSION['respuesta']);
        }
       
       

    } else {

        $_SESSION['errores'] = $errores;
       
    }



} 
header("Location:./mis-datos.php");

