<?php

//Iniciar la sesion y la conexion a bd

require_once './includes/conexion.php';


if ($_SERVER['REQUEST_METHOD']=='POST') {
    
    //Borar el error antiguo
    if (isset($_SESSION['error_login'])) {

        $_SESSION['error_longin'] = null;

    }

    $email    = mysqli_real_escape_string($con, trim($_POST['email']));
    $password = mysqli_real_escape_string($con, $_POST['password']);

    //Consulta para comprobar las credenciales

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $query= mysqli_query($con, $sql);
    $usuario = mysqli_fetch_assoc($query);

    if ($query && mysqli_num_rows($query)==1 ) {
        $verify = password_verify($password, $usuario['password']);

        if ($verify) {

            $_SESSION['usuario'] = $usuario;        
            
           
        } else {
            
            $_SESSION['error_login'] = "Login incorrecto";

        }
        

    } else {

        $_SESSION['error_login'] = "Login incorrecto";

    }
    
} 

header("Location:./");
