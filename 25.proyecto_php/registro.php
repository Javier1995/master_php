 
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

    //Recoger los valores del formulario
    $nombre    = isset($_POST['newnombre'])? mysqli_real_escape_string($con, htmlentities($_POST['newnombre'])):  false ;
    $apellidos = isset($_POST['newapellido'])? mysqli_real_escape_string($con, htmlentities($_POST['newapellido'])) : false ;
    $email     = isset($_POST['newemail'])? mysqli_real_escape_string($con, htmlentities($_POST['newemail'])): false;
    $password  = isset($_POST['newpassword'])? mysqli_real_escape_string($con,  htmlentities($_POST['newpassword'])): false;


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

     //validación de campo password
    if (!empty($password)) {

        $password_validado = true;

    } else {
        $password_validado = false;
        $errores['password'] = 'La password esta vacia';
    }
    $guardar_usuario = false;

    if (count($errores) == 0) {

        $guardar_usuario = true;
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

        //INSERT NEW USER
        $queryInsert     = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', curdate())";
        $resultado       = mysqli_query($con, $queryInsert);
        if ($resultado) {
            
            $_SESSION['respuesta'] = 'Se guardo correctamente';
        } else {

            $_SESSION['errores']['general'] = 'Fallo';
        }
        
       
        header("Location:./index.php");

    } else {

        $_SESSION['errores'] = $errores;
       
    }



} 
       
header("Location:./index.php");


